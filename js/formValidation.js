const form = document.getElementById("product_form")

form.addEventListener("submit", (event) => {
	// Sprawdź, czy każde pole jest wypełnione
	const fields = document.querySelectorAll("input, select")
	let isFormValid = true

	fields.forEach((field) => {
		if (field.value.trim() === "") {
			field.nextElementSibling.textContent = "Please, submit required data"
			isFormValid = false
		} else {
			field.nextElementSibling.textContent = ""
		}
	})

	// Sprawdź, czy wartości wprowadzone w polach typu "number" są poprawne
	const numberFields = document.querySelectorAll("input[type='number']")
	numberFields.forEach((field) => {
		if (isNaN(field.value)) {
			field.nextElementSibling.textContent =
				"Please, provide the data of indicated type"
			isFormValid = false
		} else {
			field.nextElementSibling.textContent = ""
		}
	})

	// Zapobiegnij wysłaniu formularza, jeśli którykolwiek warunek walidacji nie został spełniony
	if (!isFormValid) {
		event.preventDefault()
	}
})
