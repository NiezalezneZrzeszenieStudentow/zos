<?php
	include('header.php');
?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.2507820547335!2d16.94811051555974!3d52.40213097979207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b1252b17e69%3A0xfd1f08b05ec5737e!2sWydzia%C5%82+Budowy+Maszyn+i+Zarz%C4%85dzania+PP!5e0!3m2!1spl!2spl!4v1514309953965" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<section class="contact">
	<div class="container">
    	<div class="row">
        	<div class="col-md-8">
            	<h3>Kontakt</h3>
                <hr class="divider">
                <p>Możesz skontaktować się z nami w dowolny sposób, który jest dla Ciebie wygodny. Jesteśmy dostępni 24/7 za pośrednictwem poczty elektronicznej. Możesz również skorzystać z formularza szybkiego kontaktu poniżej lub odwiedzić nasze zakład osobiście.</p>
                <form action="mail.php" method="post">
                	<div class="form-group">
                        <label for="exampleInputPassword1">Imię</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Wprowadź imię">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wprowadź email">
                        <small id="emailHelp" class="form-text text-muted">Zawsze chronimy dane kontaktowe.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Wiadomość</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Wpisz tekst wiadomości"></textarea>
                      </div>
                      
                      <button type="submit" class="button btn btn-primary">Wyślij wiadomość</button>
                
                </form>
            </div>
            <div class="col-md-4">
            	<div class="contact">
                	
                	<div class="contact-box">
                    	<address>
                    	<h4>Adres</h4>
                        <p>ul. Piotrowo 3</p>
                        <p>60-965 Poznań</p>
                        </address>
                    </div>
                    <div class="contact-box">
                    	<address>
                    	<h4>Telefon</h4>
                        <p>61 665 28 51</p>
                        <p>61 665 28 50</p>
                        </address>
                    </div>
                    <div class="contact-box">
                    	<address>
                    	<h4>E-mail</h4>
                        <p>pawel.twardowski@put.poznan.pl</p>
                        
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
	include('footer.php');
?>