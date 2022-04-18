<section class="filtrobox">

    <div class="titulobox">
        <div class="container">
            <h3 id="filtrobtn"><i class="fa-solid fa-magnifying-glass"></i>Encuentra tu coche ideal</h3>
        </div>
    </div>

    <div id="filtro">
        <div class="container">

            <form id="filtroform" method="POST" action="" >

                <div class="form_item">
                    <div class="title">Marca</div>
                    <select id="marca" name="marca" >
                        <option selected="selected" value="all">Todas</option>
                        <option value="39">Kia</option>
                        <option value="40">BMW</option>
                        <option value="43">Citroen</option>
                    </select>
                </div>

                <div class="form_item">
                    <div class="title">Color</div>
                    <select id="color" name="color" >
                        <option selected="selected" value="all">Todos</option>
                        <option value="1">Negro</option>
                        <option value="48">Azul</option>
                    </select>
                </div>

                <div class="form_item">
                    <div class="title">Condición</div>
                    <select id="condicion" name="condicion" >
                        <option selected="selected" value="all">Todas</option>
                        <option value="1">Kmall</option>
                        <option value="2">Bueno</option>
                    </select>
                </div>

                <div class="form_item">
                    <div class="title">Provincia</div>
                    <select id="provincia" name="provincia" >
                        <option selected="selected" value="all">Todas</option>
                        <option value="1">Valencia</option>
                        <option value="2">Aragón</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
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