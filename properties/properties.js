fetch("./properties/properties.json")
  .then(response => response.json())
  .then(data => {
    const container = document.getElementById("properties-list");

    data.forEach(item => {
      const div = document.createElement("div");
      div.className = "col-sm-6 col-md-12 wow fadeInRight";

      div.innerHTML = `
        <article class="product-big">
          <div class="unit flex-column flex-md-row align-items-md-stretch">
            <div class="unit-left">
              <a class="product-big-figure" href="/details.html?id=${item.id}"><img src="${item["main-image"]}" alt="Imagem do imóvel"/></a>
            </div>
            <div class="unit-body">
              <div class="product-big-body">
                <h5 class="product-big-title"><a href="#">${item.title}</a></h5>
                <div class="group-sm group-middle justify-content-start">
                  <div class="product-big-rating">${generateRating(item.rating)}</div>
                </div>
                <p class="product-big-text">${item.shortDescription}</p>
                <a class="button button-black-outline button-ujarak" href="/details.html?id=${item.id}">Saber mais</a>
                <div class="product-big-price-wrap">
                  <span class="product-big-price">${item.price.toLocaleString('pt-PT')}€</span>
                </div>
              </div>
            </div>
          </div>
        </article>
      `;

      container.appendChild(div);
    });
  })
  .catch(error => console.error("Erro ao carregar JSON:", error));

function generateRating(rating) {
  const totalStars = 5;
  let starsHTML = "";

  for (let i = 1; i <= totalStars; i++) {
    if (rating >= i) {
      starsHTML += '<span class="icon material-icons-star"></span>';
    } else if (rating > i - 1) {
      starsHTML += '<span class="icon material-icons-star_half"></span>';
    } else {
      starsHTML += '<span class="icon material-icons-star_outline"></span>';
    }
  }

  return starsHTML;
}
