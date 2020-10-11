{include file="header.tpl"}

        <section class="text-dark text-center">
            <p class="font-weight-bold">Somos una empresa dedicada al cuidado estetico de tu vehiculo, 
                realizamos todo tipo de tratamiento para embellecer y darle
                a tu vehiculo un aspecto personalizado. <br>
                Podes encontrarnos en: <br>Av Espora 1075 o enviarnos tu consulta al
                2494-554773.
            </p>
        </section>

        <aside class="text-center">
            <form>
                <p>Introduce Nombre y Apellido:</p>
                <input type="text" placeholder="Ej. Juan">
                <p>Direccion de mail:</p>
                <input type="text" placeholder="Ej. asdfg@hotmail.com">
                <p>Numero de Tel:</p>
                <input type="tel" placeholder="Ej. 249-4111111">
                <p>Consulta:</p>
                <textarea name="Consulta" id="" cols="30" rows="10" placeholder="Deja tu consulta"></textarea>
                <div class="captcha">
                    <p>Complete el codigo de validacion:</p>
                    <p id="validacion"></p>
                    <input type="text" id="input_validacion"><br>
                </div>
                <p id="result_captcha"></p>   
            </form>
            <button id="boton_form">Enviar</button>
        </aside>
{include file="footer.tpl"}