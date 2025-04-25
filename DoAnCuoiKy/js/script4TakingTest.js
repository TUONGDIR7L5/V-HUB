const container = document.getElementById("question-list");

for (let i = 1; i <= 10; i++) {
  const card = document.createElement("div");
  card.className = "test-card";
  card.innerHTML = `
    <div class="d-flex justify-content-between">
      <p class="question">Which word is used for Vietnamese Currency?</p>
      <small>${i} of 20</small>
    </div>
    <div class="row text-center">
      <div class="col-md-6">
        <button class="btn btn-outline-secondary answer-btn">Dong</button>
      </div>
      <div class="col-md-6">
        <button class="btn btn-outline-secondary answer-btn">Dong</button>
      </div>
      <div class="col-md-6">
        <button class="btn btn-outline-secondary answer-btn">Dong</button>
      </div>
      <div class="col-md-6">
        <button class="btn btn-outline-secondary answer-btn">Dong</button>
      </div>
    </div>
    <div class="text-center mt-3">
      <a href="#" class="skip-btn">Skip</a>
    </div>
  `;
  container.appendChild(card);
}