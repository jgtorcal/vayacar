<section class="filtrobox">

    <div class="titulobox">
        <div class="container">
            <h3 id="filtrobtn"><i class="fa-solid fa-magnifying-glass"></i>Encuentra tu coche ideal</h3>
        </div>
    </div>

    <div id="filtro">
        <div class="container">

            <form id="filtroform" method="POST" action="#" >

                <div class="form_item">
                    <div class="title">Marca</div>
                    <select id="marca" name="marca" >
                        <option selected="selected" value="1">Ford</option>
                        <option value="2">Kia</option>
                        <option value="3">BMW</option>
                        <option value="4">Citroen</option>
                        <option value="5">Opel</option>
                        <option value="6">Seat</option>
                        <option value="7">Toyota</option>
                    </select>
                </div>

                <div class="form_item">
                    <div class="title">Color</div>
                    <select id="color" name="color" >
                        <option selected="selected" value="1">Blanco</option>
                        <option value="2">Negro</option>
                        <option value="3">Azul</option>
                    </select>
                </div>

                <div class="form_item">
                    <div class="title">Condición</div>
                    <select id="condicion" name="condicion" >
                        <option selected="selected" value="1">Seminuevo</option>
                        <option value="2">Km0</option>
                        <option value="3">Bueno</option>
                        <option value="4">Averiado</option>
                    </select>
                </div>

                <div class="form_item">
                    <div class="title">Provincia</div>
                    <select id="provincia" name="provincia" >
                        <option selected="selected" value="1">Catalunya</option>
                        <option value="2">Valencia</option>
                        <option value="3">Aragón</option>
                        <option value="4">Madrid</option>
                    </select>
                </div>

                <div class="form_item">
                    <button type="submit" id="enviar" name="enviar" ><i class="fa-solid fa-magnifying-glass"></i> Filtrar</button>
                </div>

            </form>

        </div>
    </div>


    <script>

    const targetDiv = document.getElementById("filtro");
    const btn = document.getElementById("filtrobtn");

    btn.onclick = function () {
        if (window.getComputedStyle(targetDiv).display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
    };

    </script>

</section>