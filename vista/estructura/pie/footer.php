    <footer class="bg-dark text-white mt-auto py-3">
        <div class="container text-center">
            <p class="mb-1">
                <strong>Legajo:</strong> FAI-4460
            </p>
            <p class="mb-0">
                <strong>Correo:</strong> musicag230204@gmail.com
            </p>
        </div>
    </footer>
    <script src="vista/js/1/validacionFormularioTP1.js"></script>
    <script src="vista/js/2/validacionFormularioTP2.js"></script>
    <script src="vista/js/3/validacionFormularioTP3.js"></script>
    <script src="vista/js/4/validacionFormularioTP4.js"></script>
    <script>
            let tpInput = document.getElementsByName('tp')[0];
            let tp = tpInput.value;
            if (tp === 'TP1') {
                document.addEventListener('DOMContentLoaded', function () {
                    let form = document.getElementById('formulario');
                    form.addEventListener('submit', function (event) {
                        if (! validarEjercicio()) {
                            event.preventDefault(); 
                        }
                    });
                });
            }else if (tp === 'TP2') {
                (() => {
                    'use strict'
                    let forms = document.querySelectorAll('.needs-validation')
                    Array.from(forms).forEach(form => {
                        form.addEventListener('submit', event => {
                            validarForm(form,event);
                        }, false)
                    })
                })()
               
            }else if(tp === 'TP3'){
                (() => {
                    'use strict'
                    let forms = document.querySelectorAll('.needs-validation')
                    Array.from(forms).forEach(form => {
                        form.addEventListener('submit', event => {
                            if(!validarFormularioArchivos()){
                                event.preventDefault();
                                event.stopPropagation(); 
                            }
                        }, false)
                    })
                })()
            }else{
                (() => {
                    'use strict'
                    let forms = document.querySelectorAll('.needs-validation')
                    Array.from(forms).forEach(form => {
                        form.addEventListener('submit', event => {
                            validFormul(event);
                        }, false)
                    })
                })()
            }
        
    </script>
</body>
</html>