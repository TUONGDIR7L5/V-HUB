document.addEventListener('DOMContentLoaded', () => {
  const answerButtons = document.querySelectorAll('.answer-btn');
  const userAnswers = {}; // Object to store user answers

  // Handle answer button clicks
  answerButtons.forEach(button => {
    button.addEventListener('click', () => {
      const questionId = button.getAttribute('data-question-id');
      const answerId = button.getAttribute('data-answer-id');

      // Remove previous selection for this question
      document.querySelectorAll(`.answer-btn[data-question-id='${questionId}']`)
        .forEach(btn => btn.classList.remove('selected'));

      // Mark new selection
      button.classList.add('selected');

      // Store user answer
      userAnswers[questionId] = answerId;

      // Mark question as answered
      const testCard = button.closest('.test-card');
      if (testCard) {
        testCard.classList.add('answered');
      }

      // Update answered count
      updateAnsweredCount();
    });
  });

  // Function to update answered count
  function updateAnsweredCount() {
    const total = document.querySelectorAll('.test-card').length;
    const answered = document.querySelectorAll('.test-card.answered').length;
    document.getElementById('answered-count').textContent = `${answered}/${total}`;
  }

  // Handle submit button click
  const submitButton = document.querySelector('#submit-test');
  if (submitButton) {
    submitButton.addEventListener('click', () => {
      // Check if at least 2 questions are answered
      if (Object.keys(userAnswers).length < 2) {
        alert("Bạn chưa trả lời đủ ít nhất 2 câu!");
        const unansweredCard = document.querySelector('.test-card:not(.answered)');
        if (unansweredCard) {
          unansweredCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        return;
      }

      // Send data to server
      fetch('model/submit_test.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(userAnswers)
    })
    .then(response => {
      if (!response.ok) {
        throw new Error(`Lỗi HTTP! Trạng thái: ${response.status}`);
      }
      return response.json();
    })
    .then(data => {
      console.log('Phản hồi từ submit_test.php:', data); // Ghi lại phản hồi để gỡ lỗi
      if (data && typeof data.score === 'number' && data.score >= 0) {
        window.location.href = `index.php?page=result&score=${data.score}`;
      } else {
        throw new Error('Điểm số không hợp lệ hoặc bị thiếu trong phản hồi');
      }
    })
    .catch(error => {
      console.error('Lỗi khi gửi bài kiểm tra:', error);
      alert('Có lỗi khi gửi bài kiểm tra. Vui lòng thử lại.');
    });
    });
  }
});