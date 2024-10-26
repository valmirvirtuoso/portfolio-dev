<?php 

    $contacts = [
        [
            "name" => "Linkedin",
            "icon" => "./assets/icons/LinkedinLogo.svg",
            "src" => "#",
        ],
        [
            "name" => "Instagram",
            "icon" => "./assets/icons/InstagramLogo.svg",
            "src" => "#",
        ],
        [
            "name" => "GitHub",
            "icon" => "./assets/icons/GithubLogo.svg",
            "src" => "#",
        ],
        [
            "name" => "E-mail",
            "icon" => "./assets/icons/EnvelopeSimple.svg",
            "src" => "#",
        ],
    ];

?>
<section id="contact" style="background-image: url(../assets/Background_Intro.jpg);background-repeat: none;background-position: center;"  class="h-screen flex flex-col justify-center items-center pt-32 pb-50 px-30">
    <div class="mb-12 flex flex-col gap-2 items-center">
        <p class="text-[#BB72E9] text-xl">Contato</p>
        <h2 class="text-2xl font-bold text-[#E2E4E9]">Gostou do meu trabalho?</h2>
        <p class="text-[Maven_Pro] text-[#C0C4CE]">Entre em contato ou acompanhe as minhas redes sociais!</p>
    </div>

    <div class="flex flex-col gap-4">
        <?php foreach ($contacts as $contact): ?>
            <a href="<?=$contact['src']?>" class="flex justify-between items-center rounded-lg bg-[#292C34] w-[400px] p-5 outline outline-2 outline-[#292C34] outline-offset-0 duration-300 hover:outline-[#3996DB]">
                <div class="flex items-center gap-3">
                    <img src="<?=$contact['icon']?>" alt="<?=$contact['name']?>" class="w-7 h-7">
                    <span class="text-[Maven_Pro] font-medium"><?=$contact['name']?></span>
                </div>
                <img src="./assets/icons/ArrowUpRight.svg" alt="ArrowRight" class="w-5 h-5">
            </a>
        <?php endforeach; ?>
        
    </div>
</section>