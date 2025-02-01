document.addEventListener("DOMContentLoaded", function () {
  const starContainers = document.querySelectorAll(".star-rating");

  starContainers.forEach((container) => {
    const stars = container.querySelectorAll(".star");
    const productId = container.getAttribute("data-product-id");

    // Verifica que product id sea válido
    if (!productId) {
      console.error(
        "Product ID is missing or invalid for container:",
        container
      );
      return;
    }

    stars.forEach((star) => {
      star.addEventListener("click", function () {
        const rating = parseInt(this.getAttribute("data-value"), 10);

        if (!isNaN(rating)) {
          updateStars(container, rating);
          submitRating(productId, rating);
        } else {
          console.error("Invalid star value:", this.getAttribute("data-value"));
        }
      });
    });
  });
});

// Actualiza las estrellas del producto
function updateStars(container, rating) {
  const stars = container.querySelectorAll(".star");
  stars.forEach((star, index) => {
    if (index < rating) {
      star.classList.add("filled");
    } else {
      star.classList.remove("filled");
    }
  });
}

// Envía la información de la valoración al servidor
function submitRating(productId, rating) {
  // Añadido para depuración por consola :)

  console.log("Sending rating for Product ID:", productId, "Rating:", rating);

  // Cambiar a formato x-www-form-urlencoded en lugar de JSON para enviar datos "product_id=123&rating=4". Esto permite acceder desde $_POST en php sin tener que decodificar json.
  const params = new URLSearchParams();
  params.append("product_id", productId);
  params.append("rating", rating);

  // Usa axios para enviar a PHP

  axios
    .post("../src/rating_handler.php", params)
    .then(function (response) {
      if (response.data.success) {
        updateProductRow(productId, response.data);
      } else {
        // Mostrar el error en consola para más detalles
        console.error("Error from server:", response.data.message);
        alert("Error: " + response.data.message);
      }
    })
    .catch(function (error) {
      // Depuración en caso de error en la solicitud
      console.error("Error while submitting rating:", error);
      alert("Error while submitting rating. Please try again later.");
    });
}

// Actualiza la fila del producto para mostrar la nueva info
function updateProductRow(productId, data) {
  const row = document.getElementById("producto-" + productId);
  if (row) {
    const avgRating = data.new_avg_rating;

    if (avgRating !== null && avgRating !== undefined && !isNaN(avgRating)) {
      row.querySelector(".avg-rating").textContent = avgRating.toFixed(1);
    } else {
      row.querySelector(".avg-rating").textContent = "N/A"; // mostrar N/A si no hay calificación válida
    }

    row.querySelector(".ratings-count").textContent = data.new_ratings_count;
  }
}
