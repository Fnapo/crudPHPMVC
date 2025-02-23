function regresar() {
	window.history.back();
}

function seleccionAccionFormulario(accion) {
	/*let elemento = document.querySelector(
		`input[name="accion"][value=${accion}]`
	);
	elemento.checked=true;
	*/

	let elemento = $(`input[name="accion"][value=${accion}]`);//.prop('checked', true);
	//elemento.checked = true; FALLA
	elemento.prop('checked', true);
}

function enviarSiempreFormulario(accion) {
	prepararFormulario();
	seleccionAccionFormulario(accion);
}

function prepararFormulario() {
	$('input, select, textarea').each(function () {
		$(this).removeAttr('required')
	});
}
