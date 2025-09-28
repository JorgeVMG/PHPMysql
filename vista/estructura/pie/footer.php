    <script>
        (() => {
            'use strict'
            let forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <!--    <script src="../js/1/validacionFormularioTP1.js"></script>
    <script src="../js/2/validacionFormularioTP2.js"></script>
    <script src="../js/3/validacionFormularioTP3.js"></script>
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
               
            }else{
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
            }
        
    </script>-->
</body>
</html>