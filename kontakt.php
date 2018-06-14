<?php include 'header.php'; ?>

<header class="section row center-lg">
    <div class="col-lg-12 center">
        <h1>Désirée Isabelle Berger</h1>
    </div>

    <div class="mail col-lg-12 center">
        <a href="#"><i class="icon">&nbsp;</i>dib@desireinbalance.com</a>
    </div>

    <div class="tel col-lg-12 center">
        <a href="#"><i class="icon">&nbsp;</i>+41 79 652 17 50</a>
    </div>
</header>

<div class="section grey locations">
    <h2 class="center-text">Standort</h2>

    <div class="row center-lg">
        <div class="col-lg-5 location">
            <i class="icon">&nbsp;</i>
            Physiotherapie MOVE<br />
            Baslerstrasse 47/49<br />
            4600 Olten
        </div>

        <div class="col-lg-5 location">
            <i class="icon">&nbsp;</i>
            MN Training<br />
            Hunnenweg 6<br />
            4500 Solothurn
        </div>

        <div class="col-lg-5 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2703.0556541641763!2d7.900141916197238!3d47.35231137916862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479031ca188131c9%3A0x9b9eb12fe9357852!2sBaslerstrasse+47%2C+4600+Olten!5e0!3m2!1sde!2sch!4v1528966256596" width="100%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-lg-5 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.9320049650173!2d7.530228416193589!3d47.19834337915973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e28009b06f593%3A0x2b58a277b74f7495!2sHunnenweg+6%2C+4500+Biberist!5e0!3m2!1sde!2sch!4v1528966321901" width="100%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="section intro-text">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <h2>Bei dir zuhause</h2>

            <p>
                Blindtexte nennt man Texte, die bei der Produktion von Publikationen oder Webseiten als Platzhalter für spätere Inhalte stehen, wenn der eigentliche Text noch nicht vorhanden ist. 
            </p>

            <div class="button-wrap">
                <a href="#" class="button dark">Privatlektionen</a>
            </div>
        </div>
    </div>
</div>

<div class="section dark-grey subscription contact">
    <h2 class="center-text">Kontakt</h2>

    <div class="row center-lg">
        <div class="col-lg-8">
            <form class="row">
                <div class="col-lg-6">
                    <input type="text" placeholder="Vorname" class="label-slide" required>
                </div>

                <div class="col-lg-6">
                    <input type="text" placeholder="Nachname" class="label-slide" required>
                </div>

                <div class="col-lg-12">
                    <input type="text" placeholder="E-Mail Adresse" class="label-slide" required>
                </div>

                <div class="col-lg-12">
                    <input type="text" placeholder="Telefon Nr." class="label-slide" required>
                </div>

                <div class="col-lg-12">
                    <input type="textarea" placeholder="Kommentar (optional)" class="label-slide" required>
                </div>

                <div class="button-wrap center">
                    <a href="#" class="button dark submit" type="submit"><i class="icon"></i>
                Absenden</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
      $('.label-slide').jvFloat();
    };
</script>

<?php include 'footer.php'; ?>