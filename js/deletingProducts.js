// Znajdź przycisk "mass delete"
const massDeleteBtn = document.querySelector("#mass-delete-btn")

// Dodaj nasłuchiwanie na kliknięcie przycisku "mass delete"
massDeleteBtn.addEventListener("click", () => {
	// Znajdź wszystkie zaznaczone checkboxy
	const checkboxes = document.querySelectorAll(".checkbox:checked")

	// Usuń z widoku zaznaczone kontenery .card
	checkboxes.forEach((checkbox) => {
		const card = checkbox.closest(".card")
		card.remove()
	})

	// const xhr = new XMLHttpRequest()
	// xhr.open("POST", "./delete-products.php")
	// xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
	// xhr.send(
	// 	`ids=${Array.from(checkboxes)
	// 		.map((checkbox) => checkbox.dataset.id)
	// 		.join(",")}`
	// )

	// Pobierz identyfikatory zaznaczonych produktów
	const productIds = []
	checkboxes.forEach((checkbox) => {
		const card = checkbox.closest(".card")
		const productId = card.dataset.productId
		productIds.push(productId)
	})

	// Prześlij identyfikatory zaznaczonych produktów do PHP
	const xhr = new XMLHttpRequest()
	xhr.open("POST", "delete-products.php")
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	xhr.onload = function () {
		// Przeładuj stronę
		location.reload()
	}
	const data = "productIds=" + productIds.join(",")
	xhr.send(data)
})
