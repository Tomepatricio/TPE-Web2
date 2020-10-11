{include file="header.tpl"}

        <label>Filtrar por Servicio:<input type="text" id="filtro"></label>

        <table class="tabla">
            <thead>
                <tr>
                    <th>Sercicios</th>
                    <th>Detalles</th>
                    <th>Costo</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody id="body_tabla"></tbody>
        </table>

        <section id="input_tabla">
            <label>Ingrese Servicio: <input type="text" id="input_servicio"></label>
            <label>Ingrese Etapas: <input type="text" id="input_etapa"></label>
            <label>Ingrese Precio: <input type="number" id="input_precio"></label>
        </section>

        <button id="btn-agregar-tabla">Agregar</button>
        <button id="btn-borrar-tabla">Limpiar Tabla</button>
        <button id="btn-cargar-tres-tabla">Agregar 3 Elementos</button>
        <button id="btn-cargar">Cargar API</button>

        <ol id="lista_servicios">
            <li>Limpieza y Desinfección del interior del Vehículo</li>
            <li>Pulido en 1 Etapa</li>
            <li>Pulido en 2 Etapas</li>
            <li>Pulido en 3 Etapas</li>
            <li>Sin Sellado</li>
            <li>Sellado Acrílico</li>
            <li>Sellado Céramico</li>
            <li>Sin Protección</li>
            <li>Protección de 6 meses</li>
            <li>Protección de 3 años</li>
            <li>Nutrido de Plasticos y Cuero</li>
            <li>Siliconado de Alfombras y Burletes</li>
        </ol>

{include file="footer.tpl"}