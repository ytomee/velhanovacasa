function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

const propertyId = getQueryParam("id");

fetch("./properties/properties.json")
    .then(response => response.json())
    .then(data => {
        const container = document.getElementById("properties-details");
        container.innerHTML = "";

        const property = data.find(item => item.id == propertyId);

        if (property) {
            const div = document.createElement("div");
            div.innerHTML = `
                <section class="section section-sm bg-default">
                    <div class="container">
                        <div class="details-header">
                            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">${property.title}</span></h3>
                            <div class="header-price wow slideInDown">${property.price}€</div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <img class="wow slideInUp" src="${property.mainImage}" data-wow-delay=".2s">
                            </div>
                            <div class="col-4">
                                <div class="details-wrapper">
                                    ${property.detailsImages.map(img => `<img class="wow fadeInLeft" src="${img.url}" data-wow-delay=".2s">`).join('')}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-sm bg-default" style="padding-top: 0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-8 wow slideInRight">
                                ${property.description.map(desc => `
                                    <div class="details-text">
                                        <div class="details-title text-left">${desc.title}</div>
                                        <div class="details-description">${desc.description}</div>
                                    </div>
                                `).join('')}
                            </div>
                            <div class="col-4 wow slideInLeft">
                                <div class="details-info">
                                    <div class="details-header text-left">Informações</div>
                                    <div class="details-content">
                                        ${property.detailsContainer.map(detail => `
                                            <div class="details-item text-left">
                                                <span class="details-label">${detail.label}: </span>
                                                <span class="details-value">${detail.value}</span>
                                            </div>
                                        `).join('')}
                                    </div>
                                    <div class="details-content-description">
                                        ${property.detailsContainerDescription.map(desc => desc.desc).join('')}
                                    </div>
                                    <a class="details-button button" href="#">Marcar visita</a>
                                </div>
                            </div>
                        </div>
                    </div>        
                </section>

                <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
                    <div class="container-fluid">
                        <h6 class="gallery-title">Galeria</h6>
                        <div class="owl-carousel owl-classic owl-dots-secondary">
                            ${property.gallery.map(img => `
                                <article class="thumbnail thumbnail-mary">
                                    <div class="thumbnail-mary-figure"><img src="${img.url}" alt="" width="270" height="195"/></div>
                                    <div class="thumbnail-mary-caption">
                                        <a class="icon fl-bigmug-line-zoom60" href="${img.url}" data-lightgallery="item">
                                            <img src="${img.url}" alt="" width="270" height="195"/>
                                        </a>
                                    </div>
                                </article>
                            `).join('')}
                        </div>
                    </div>
                </section>

                <section class="section section-sm bg-default" style="padding-bottom: 0;">
                    <div class="container">
                        <h3 class="oh-desktop" style="margin-bottom: 25px;"><span class="d-inline-block wow slideInDown">Onde fica</span></h3>
                    </div>
                    <div class="maps-container">
                        ${property.maps}
                    </div>
                </section>
            `;
            container.appendChild(div);
        } else {
            container.innerHTML = "<p>Propriedade não encontrada.</p>";
        }
    })
    .catch(error => console.error("Erro ao carregar JSON:", error));