/* Função genérica para abrir e fechar elementos */
function toggleElement(elementId, displayValue) {
  var element = document.getElementById(elementId);
  element.style.display = displayValue;
}

/* Relatórios Vendas */
function openVendasGerais() {
  toggleElement("VendasGerais", "block");
}

function closeVendasGerais() {
  toggleElement("VendasGerais", "none");
}

function openVendasClasses() {
  toggleElement("PopVendasClasses", "block");
}

function closeVendasClasses() {
  toggleElement("PopVendasClasses", "none");
}

/* Relatórios Comerciais */
function openEcommerce() {
  toggleElement("Ecommerce", "block");
}

function closeEcommerce() {
  toggleElement("Ecommerce", "none");
}

function openShowroom() {
  toggleElement("Showroom", "block");
}

function closeShowroom() {
  toggleElement("Showroom", "none");
}

function openExternas() {
  toggleElement("Externas", "block");
}

function closeExternas() {
  toggleElement("Externas", "none");
}

function openDecoracao() {
  toggleElement("Decoracao", "block");
}

function closeDecoracao() {
  toggleElement("Decoracao", "none");
}

function openClasseN1() {
  toggleElement("ClasseN1", "block");
}

function closeClasseN1() {
  toggleElement("ClasseN1", "none");
}

/* Outros */

function openReserva() {
  toggleElement("Reserva", "block");
}

function closeReserva() {
  toggleElement("Reserva", "none");
}

function openCompra() {
  toggleElement("Compra", "block");
}

function closeCompra() {
  toggleElement("Compra", "none");
}

function openLogistica() {
  toggleElement("Logistica", "block");
}

function closeLogistica() {
  toggleElement("Logistica", "none");
}