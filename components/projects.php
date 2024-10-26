<?php 

    $projects = [
        [
            "titulo" => "Travelgram",
            "descricao" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
            "stack" => ["PHP", "CSS", "HTML", "JavaScript",],
            "img" => "./assets/travelgram.jpg"
        ],
        [
            "titulo" => "Página de receita",
            "descricao" => "Página com o passo a passo de uma receita para cupcakes",
            "stack" => ["PHP", "CSS", "HTML", "JavaScript",],
            "img" => "./assets/receita.jpg"
        ],
        [
            "titulo" => "Tech News",
            "descricao" => "Homepage de um portal de notícias sobre a área de tecnologia",
            "stack" => ["PHP", "CSS", "HTML", "JavaScript",],
            "img" => "./assets/tech-news.jpg"
        ],
        [
            "titulo" => "Refund",
            "descricao" => "Um sistema para pedido e acompanhamento de reembolso",
            "stack" => ["PHP", "CSS", "HTML", "JavaScript",],
            "img" => "./assets/reembolso.jpg"
        ],
        [
            "titulo" => "Página de turismo",
            "descricao" => "Página com as principais informações para quem quer viajar para Busan",
            "stack" => ["PHP", "CSS", "HTML", "JavaScript",],
            "img" => "./assets/turismo.jpg"
        ],
        [
            "titulo" => "Zingen",
            "descricao" => "Landing Page completa e responsiva de um aplicativo de Karaokê",
            "stack" => ["PHP", "CSS", "HTML", "JavaScript",],
            "img" => "./assets/audio.jpg"
        ],
    ];

?>
<section id="projects" class="bg-[#16181D] pt-18 pb-36 px-30">
        <div class="text-center mb-14">
        <p class="text-xl text-[#E3646E]">Meu trabalho</p>
        <h2 class="text-2xl font-bold text-[#E2E4E9]">Veja os projetos em destaque</h2>
        </div>

        <div class="grid grid-cols-[508px_508px] justify-center gap-6">
        
        <?php foreach ($projects as $project): ?>
            <div class="flex gap-4 bg-[#292C34] p-3 rounded-xl w-[508px] outline outline-2 outline-[#292C34] outline-offset-0 duration-300 cursor-pointer hover:outline-[#878EA1]">
                <img src="<?=$project['img']?>" alt="project-img" class="w-56 h-[156px] rounded-lg">
                <div>
                    <p class="font-['Asap'] font-bold text-[#E2E4E9] mb-2"><?=$project['titulo']?></p>
                    <p class="w-[236px] text-[Maven_Pro] text-sm text-[#C0C4CE] mb-8"><?=$project['descricao']?></p>
                    <div class="flex items-center gap-2 font-['Inconsolata'] text-xs text-[#16181D] font-bold">
                        <?php 
                            $colors = ['PHP' => '#BB72E9', 'CSS' => '#3996DB', 'HTML' => '#E3646E', 'JavaScript' => '#EABD5F',];
                            foreach ($project['stack'] as $key => $stack):
                        ?>
                            <div class="py-0.5 px-2 bg-[<?=$colors[$stack]?>] rounded-full"><?=$stack?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        </div>
</section>