<section id="contador">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-7">
                <div class="d-none d-md-flex">
                    <p class="starts">O evento começa em:</p>
                    <p class="day"></p>
                    <p class="hour"></p>
                    <p class="minutes"></p>
                    <p class="seconds"></p>
                </div>
                <div class="d-flex d-md-none justify-content-center">
                    <p class="starts text-center">O evento começa em:</p>
                </div>
                <div class="d-flex d-md-none justify-content-center">
                    <p class="day"></p>
                    <p class="hour"></p>
                    <p class="minutes"></p>
                    <p class="seconds"></p>
                </div>

            </div>
            <div class="col-12 col-md-5">
                <div class="share d-flex justify-content-end">
                    <p class="text-share">
                        Compartilhe:
                    </p>
                    <a href="https://www.linkedin.com/shareArticle?url=<?= urlencode('www.ibgc.org.br/congresso') ?>" target="_blank">
                        <img src="<?= get_template_directory_uri() . '/assets/img/in.png' ?>" alt="Compartilhe no LinkedIn" />
                    </a>
                    <a href="https://wa.me/?text=Já garanti meu ingresso para o Congresso IBGC 2022! Vamos juntos? www.ibgc.org.br/congresso" target="_blank">
                        <img src="<?= get_template_directory_uri() . '/assets/img/wpp.png' ?>" alt="Compartilhe no WhatsApp" />
                    </a>
                    <a class="inscreva" href="#ingressos">
                        Inscreva-se
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>