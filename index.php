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
            <h3 id="atencao">Graduanda em Ciência da Computação</h3>
            <p class="texto-maior" id="estagio">Programa Estagiar Globo 2024</p>
        </section> 

        <section id="sobremim">
            <div class="box" >
                <p class="texto-maior">Aluna do 4º período de Ciência da Computação na Universidade Federal Fluminense (UFF).</p>
                <p>2023 - 2026 (Previsão de formatura)</p>
            </div>
                <figure>
                    <img src="fotos/10.jpg" alt="Calourada">
                    <img src="fotos/11.jpg" alt="Calourada">
                </figure>
            
        </section class="sobremim">

        <section class="experiencias">
            <h3>Experiências que trouxeram aprendizados sobre conviver com a diferença :</h3>
            <div class="box">
                <p>Participei durante um ano e meio do projeto de extensão Incluir, que visa promover a inclusão digital de idosos. Sou voluntária do projeto Sempre Criança, que ajuda crianças e famílias em situação de vulnerabilidade. Entrei no projeto em 2020 e continuo até hoje!</p>
            </div>

            <figure>
                <img src="fotos/7.jpg" alt="Incluir">
                <img src="fotos/12.jpg" alt="Sempre criança">
                <img src="fotos/2.jpg" alt="Sempre criança">
            </figure>
        </section>

        <section class="experiencias">
            <h3>Experiências que trouxeram aprendizados sobre conviver com a diferença :</h3>
            <div class="box">
                <p>Em setembro deste ano, fiz minha primeira viagem sozinha para um congresso, onde apresentei um artigo que foi escrito com base no projeto de web que desenvolvi enquanto era bolsista do grupo PET-Tele da UFF.</p>
            </div>

            <figure>
                <img src="fotos/4.jpg" alt="COBENGE 2024">
                <img src="fotos/5.jpg" alt="COBENGE 2024">
                
            </figure>
        </section>

        <section id="respostas">
            <h3>Respondendo às perguntas: </h3>
            <div class="div-respostas">
                <div class="box">
                    <h5>Como você acredita que participar do Programa terá um papel importante na sua história profissional?</h5>
                    <hr>
                    <p>Estagiando na Globo, tenho a oportunidade de adquirir novas habilidades e conhecimentos com pessoas mais experientes, expandir minha rede de contatos e conviver em um ambiente acolhedor, colaborativo e diverso. Com isso, conseguirei enriquecer minha formação acadêmica e me destacar na minha área.</p>
                </div>

                <div class="box">
                    <h5>O que você acredita que seja sua maior contribuição para 
                    sua liderança e colegas de trabalho?</h5>
                    <hr>
                    <p>Acredito que minha maior contribuição seja a comunicação assertiva, que garante um ambiente de trabalho tranquilo e harmônico. Busco um lugar onde possa compartilhar minhas ideias, pensamentos e inovações de forma acolhedora e livre de julgamentos. Sempre proponho aos meus colegas um diálogo aberto, com trocas de ideias e uma comunicação inclusiva. Assim, temos uma equipe mais unida, onde todos se sentem ouvidos e motivados a colaborar e contribuir.</p>
                </div>
                </div>

        </section>

        <section id="contatos">
            <h1>Muito obrigada pela atenção!!</h1>
            <div id="coluna">
                <div id="contact_me">
                    <div style="text-align: center;">
                        <a href="https://linkedin.com/in/luisastellet" target="_blank">
                            <img src="fotos/linkedin.png" alt="Linkedin">
                            <p style="color: var(--roxo-azulado); font-weight: bold;">Se conecte comigo!</p>
                        </a>
                    </div>
                    <div style="text-align: center;">
                        <a href="https://github.com/luisastellet" target="_blank">
                            <img src="fotos/github.png" alt="Github">
                            <p style="color: var(--roxo-azulado); font-weight: bold;">Veja meu portfólio!</p>
                        </a>
                    </div>
                </div>
                <form>
                    <div id="form">
                        <label for="option">Clique para listar meus repositórios de forma automatizada! </label>
                        <input type="checkbox" id="option" name="option" onchange="mostrarConteudo(this.checked)">
                    </div>

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