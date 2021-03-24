<br>
<form align="center" method="POST" action="<?php echo base_url('Formulaire/index')?>" > 
<input type='hidden' name='formulaire' value='true'></input>
<input name="nom" type='texte'></input> 
<br>
<?php if(isset($validation) && $validation->hasError('nom') && $request->getVar('formulaire')=='true'){
    echo $validation->getError('nom');
    ?><b style='color:red'> error</b><?php
}?>
<br><br>
<input name="prenom" type='texte'> </input> <br>
<?php if(isset($validation) && $validation->hasError('prenom') && $request->getVar('formulaire')=='true'){
    echo $validation->getError('prenom');
    ?><b style='color:red'> error</b><?php
}?> 
<br><br>
<button type="submit">envoyer</button> <br>



</form>
























<!-- <form method='POST' action="<?php echo base_url('Formulaire/index')?>"> 
<input name='email'></input>
<button type='submit'>envoyer</button> <br>
<?php if(isset($validation) && $validation->hasError('email')){
    echo 'erreur';
} ?>
</form>-->

<!-- <form method='GET' action="<?php echo base_url('LienEtRedirection/index')?>">  
<input name='page' type='texte'></input>
<button type='submit'>envoyer</button>
</form>  -->