function suma(a, b) {
    return a + b;
}

console.log('Hello World!' + suma(2, 3));

initialize();

function initialize() {
    
    console.log('OnLoad Complete');
    console.log(navigator.userAgent);
    console.log(navigator.language);
    console.log(navigator.languages);

}


function copiarTexto() {
    // Obtener el elemento de entrada de texto
    const textoInput = document.getElementById('textoInput');

    // Intentar copiar el texto al portapapeles
    navigator.clipboard.writeText(textoInput.value)
      .then(() => {
        alert('Texto copiado exitosamente al portapapeles');
      })
      .catch(err => {
        console.error('Error al intentar copiar al portapapeles:', err);
      });
  }

//QUE SON LAS VARIABLES MUTALES E INMUTABLES
//
//Las variables mutables son aquellas que pueden cambiar su valor en cualquier momento, mientras que las inmutables son aquellas que no pueden cambiar su valor.    q


//QUE SON LAS VARIABLES POR VALOR Y POR REFERENCIA?
//
//

