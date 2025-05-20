<?php
// index.php
$pageTitle = "Home | VHuB";
require_once 'layout/header.php';
?>

<div class="container py-4">
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <p id="title-vocabulary" style="color:rgba(99, 99, 99, 0.662)">Vocabulary</p>
            <h3><img src="public/img/vocab.png" alt="books" class="me-2"/>Vietnamese Vocabulary</h3>
        </div>
        <!-- Toggle Button -->
        <button class="toggle-btn" id="toggleBtn" onclick="toggleView()">
            <i class="bi bi-list"></i>
        </button>
    </div>

    <div class="container d-flex justify-content-center">
        <!-- Flashcard View -->
        <div class="flashcard-container active" id="flashcardContainer">
            <div class="flashcard" id="flashcard">
                <div class="flashcard-inner" id="flashcardInner">
                    <div class="flashcard-front">
                        <div class="flashcard-text" id="cardQuestion"></div>
                    </div>
                    <div class="flashcard-back">
                        <div class="flashcard-text" id="cardAnswer"></div>
                    </div>
                </div>
                <div class="dots" id="dots"></div>
            </div>
            <div class="controls">
                <button class="btn-nav" id="prevBtn" onclick="prevCard()" disabled>←</button>
                <button class="btn-nav" id="nextBtn" onclick="nextCard()">→</button>
                <button class="btn-play" id="playBtn" onclick="flipCard()">
                    <i class="bi bi-play-fill"></i>
                </button>
                <button class="btn-close" onclick="closeFlashcard()">
                    <i class="bi bi-x"></i>
                </button>
            </div>
        </div>

        <!-- Table View -->
        <div class="table-container" id="tableContainer">
            <table class="table">
                <thead>
                    <tr>
                        <th>Vietnamese</th>
                        <th>English</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody id="vocabTable"></tbody>
            </table>
        </div>
    </div>

    <script>
        const cards = [
            { question: "Từ đồng nghĩa", answer: "Synonym", example: "Example" },
            { question: "Giải thuật", answer: "Algorithm", example: "Example" },
            { question: "Dữ liệu lớn", answer: "Big Data", example: "Example" },
            { question: "Trí tuệ nhân tạo", answer: "AI", example: "Example" },
            { question: "Phát minh", answer: "Invention", example: "Example" },
            { question: "Hệ điều hành", answer: "Operating Systems", example: "Example" },
            { question: "Cơ sở dữ liệu", answer: "Database", example: "Example" },
            { question: "Lập trình", answer: "Programming", example: "Example" }
        ];

        let currentIndex = 0;
        let isFlipped = false;
        let isFlashcardView = true;

        function renderDots() {
            const dotsContainer = document.getElementById("dots");
            dotsContainer.innerHTML = "";
            cards.forEach((_, index) => {
                const dot = document.createElement("span");
                dot.className = "dot" + (index === currentIndex ? " active" : "");
                dotsContainer.appendChild(dot);
            });
        }

        function updateCard() {
            const card = cards[currentIndex];
            document.getElementById("cardQuestion").textContent = card.question;
            document.getElementById("cardAnswer").textContent = card.answer;
            // Reset flip state
            isFlipped = false;
            document.getElementById("flashcard").classList.remove("flipped");
            document.getElementById("playBtn").innerHTML = '<i class="bi bi-play-fill"></i>';
            // Update dots
            renderDots();
            // Update button states
            document.getElementById("prevBtn").disabled = currentIndex === 0;
            document.getElementById("nextBtn").disabled = currentIndex === cards.length - 1;
        }

        function flipCard() {
            isFlipped = !isFlipped;
            document.getElementById("flashcard").classList.toggle("flipped");
            document.getElementById("playBtn").innerHTML = isFlipped
                ? '<i class="bi bi-arrow-left"></i>'
                : '<i class="bi bi-play-fill"></i>';
        }

        function nextCard() {
            if (currentIndex < cards.length - 1) {
                currentIndex++;
                updateCard();
            }
        }

        function prevCard() {
            if (currentIndex > 0) {
                currentIndex--;
                updateCard();
            }
        }

        function closeFlashcard() {
            document.getElementById("flashcardContainer").style.display = "none";
        }

        function renderTable() {
            const tbody = document.getElementById("vocabTable");
            tbody.innerHTML = "";
            cards.forEach(card => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${card.question}</td>
                    <td>${card.answer}</td>
                    <td>${card.example}</td>
                `;
                tbody.appendChild(row);
            });
        }

        function toggleView() {
            isFlashcardView = !isFlashcardView;
            document.getElementById("flashcardContainer").classList.toggle("active", isFlashcardView);
            document.getElementById("tableContainer").classList.toggle("active", !isFlashcardView);
            document.getElementById("toggleBtn complying with artifact guidelines.").innerHTML = isFlashcardView
                ? '<i class="bi bi-list"></i>'
                : '<i class="bi bi-card-text"></i>';
        }

        // Initialize
        renderTable();
        updateCard();
    </script>
    <link rel="stylesheet" href="public/css/style4courseDetail.css">
<?php
require_once 'layout/footer.php';
?>