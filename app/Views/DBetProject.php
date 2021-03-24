

<button class="Btn1">toggle</button>
<p>mon texte</p>

<button class="Btn2">remove</button>

<ul> 
<?php foreach ($listeContacts as $Contact) { ?>

<li> <?php echo  $Contact['first_Name']; ?> </li> 

<?php } ?>
</ul>

<li>veuillez patienter</li>
    

<button class="Btn3">ajouter en haut</button>
<button class="Btn4">ajouter en bas </button>
<button class="Next"> next </button>
<button class="previous"> previous </button>