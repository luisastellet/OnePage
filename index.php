<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnePage</title>
    <link rel="stylesheet" href="style.css">

    <script>
        function mostrarConteudo(isChecked) {
            let conteudo = document.getElementById('conteudo');
            if (isChecked) {
                conteudo.style.display = 'block';
            } else {
                conteudo.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <?php
        $dados = json_decode(file_get_contents("dados.json"), true);
    ?>

    <main>
        <section id="capa">
            <h1>Luisa Stellet</h1>
            <h3>Graduanda em Ciência da Computação</h3>
            <p>Programa Estagiar Globo 2024</p>
        </section> 

        <section id="sobremim">
            <div class="box">
                <p>Aluna do 4° período de <strong>Ciência da Computação</strong> na Universidade Federal Fluminense - UFF</p>
                <p>2023 - 2026 (Previsão de formatura)</p>
            </div>
                <figure>
                    <img src="fotos/10.jpg" alt="Calourada">
                    <img src="fotos/11.jpg" alt="Calourada">
                </figure>
            
        </section class="sobremim">

        <section class="experiencias">
            <h3>Experiências valiosas :</h3>
            <div class="box">
                <p>Participei durante 1 ano e meio do projeto de extensão Incluir que visa promover a inclusão digital de idosos. Sou voluntária do projeto Sempre Criança, que ajuda crianças e familias em situação de vulnerabilidade. Entrei no projeto em 2020 e continuo até hoje!</p>
            </div>

            <figure>
                <img src="fotos/6.jpg" alt="Incluir">
                <img src="fotos/7.jpg" alt="Incluir">
                <img src="fotos/12.jpg" alt="Sempre criança">
                <img src="fotos/2.jpg" alt="Sempre criança">
            </figure>
        </section>

        <section class="experiencias">
            <h3>Experiências valiosas :</h3>
            <div class="box">
                <p>Em setembro desse ano fiz a minha primeira viagem sozinha para um Congresso para apresentar um artigo que foi escrito em cima do projeto de web que eu fiz enquanto era bolsista do grupo PET-Tele da UFF.</p>
            </div>

            <figure>
                <img src="fotos/4.jpg" alt="COBENGE 2024">
                <img src="fotos/5.jpg" alt="COBENGE 2024">
                
            </figure>
        </section>

        <section id="respostas">
            <div class="box">
                <h3>Respondendo as perguntas: </h3>
            </div>

        </section>

        <section id="contatos">
            <h1>Muito obrigada pela atenção!!</h1>
            <h3>Links para contato:</h3>
            <div id="coluna">
                <div id="contact_me">
                    <div style="text-align: center;">
                        <a href="linkedin.com/in/luisastellet" target="_blank">
                            <img src="fotos/linkedin.png" alt="Linkedin">
                            <p>Se conecte comigo!</p>
                        </a>
                    </div>
                    <div style="text-align: center;">
                        <a href="https://github.com/luisastellet" target="_blank">
                            <img src="fotos/github.png" alt="Github">
                            <p>Veja meu portfólio!</p>
                        </a>
                    </div>
                </div>
                <form>
                    <label for="option">Clique para listar meus repositórios de forma automatizada! </label>
                    <input type="checkbox" id="option" name="option" onchange="mostrarConteudo(this.checked)">

                    <div id="conteudo" style="display:none;">
                        <?php
                            echo "<div id='contact_me'>";
                            echo "<ul>";
                            $i = 0;
                            foreach($dados as $dado){
                                echo "<a href='{$dado['link']}' target='_blank'><li>{$dado['nome']}</li></a>";
                                $i++;
                                if($i == 5){
                                    echo "</ul><ul>";
                                    $i = 0;
                                }
                            }
                            echo "</ul>";
                            echo "</div>";
                        ?>
                    </div>
                </form>
                                
            </div>
            

        </section>
    </main>
</body>
</html>