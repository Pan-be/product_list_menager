const productType = document.getElementById("productType")
const size = document.getElementById("size")
const weight = document.getElementById("weight")
const height = document.getElementById("height")
const width = document.getElementById("width")
const length = document.getElementById("length")

size.parentElement.parentElement.style.display = "none"
weight.parentElement.parentElement.style.display = "none"
height.parentElement.parentElement.style.display = "none"
width.parentElement.parentElement.style.display = "none"
length.parentElement.parentElement.style.display = "none"

document.addEventListener("DOMContentLoaded", function () {
	// funkcja do wyświetlania pól zgodnie z wybranym typem produktu
	function handleProductType() {
		const selectedType = productType.value
		if (selectedType === "1") {
			// DVD
			size.parentElement.parentElement.style.display = "block"
			weight.parentElement.parentElement.style.display = "none"
			height.parentElement.parentElement.style.display = "none"
			width.parentElement.parentElement.style.display = "none"
			length.parentElement.parentElement.style.display = "none"
		} else if (selectedType === "2") {
			// Book
			size.parentElement.parentElement.style.display = "none"
			weight.parentElement.parentElement.style.display = "block"
			height.parentElement.parentElement.style.display = "none"
			width.parentElement.parentElement.style.display = "none"
			length.parentElement.parentElement.style.display = "none"
		} else if (selectedType === "3") {
			// Furniture
			size.parentElement.parentElement.style.display = "none"
			weight.parentElement.parentElement.style.display = "none"
			height.parentElement.parentElement.style.display = "block"
			width.parentElement.parentElement.style.display = "block"
			length.parentElement.parentElement.style.display = "block"
		}
	}

	// wywołanie funkcji handleProductType przy zmianie typu produktu
	productType.addEventListener("change", handleProductType)
})
