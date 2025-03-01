function regresar() {
	window.history.back();
}

function seleccionTodoFormulario(controlador, accion) {
	seleccionControllerFormulario(controlador);
	seleccionAccionFormulario(accion);
}

function seleccionControllerFormulario(controlador) {
	let elemento = $(`input[name="controlador"][value=${controlador}]`);
	elemento.prop('checked', true);
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
