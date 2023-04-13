const productType = document.getElementById("productType")
const fields = {
	1: ["size"],
	2: ["weight"],
	3: ["height", "width", "length"],
}

const allFields = document.querySelectorAll(".form-field")
allFields.forEach((field) => {
	field.parentElement.parentElement.style.display = "none"
})

function showFields(fieldsToShow) {
	allFields.forEach((field) => {
		if (fieldsToShow.includes(field.id)) {
			field.parentElement.parentElement.style.display = "block"
			field.required = true
		} else {
			field.parentElement.parentElement.style.display = "none"
			field.required = false
		}
	})
}

document.addEventListener("DOMContentLoaded", function () {
	// funkcja do wyświetlania pól zgodnie z wybranym typem produktu
	function handleProductType() {
		const selectedType = productType.value
		const fieldsToShow = fields[selectedType] || []
		showFields(fieldsToShow)
	}

	// wywołanie funkcji handleProductType przy zmianie typu produktu
	productType.addEventListener("change", handleProductType)
})
