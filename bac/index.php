<div class="row">
  <div class="col-md-6">

<form id="formBAC" action="content/bac/generate_preview.php" method="post" target="preview" enctype="multipart/form-data">
    <h2>Informations de Base</h2>
    <h5 style="color:#ff0000">* : champs obligatoires</h5>
    <div>
        <label for="effect"><?php echo L::field_effect; ?>  <span style="color:#ff0000">*</span> :</label>
        <input class="form-control-light" max="100" min="0" type="range" name="effect" value='<?php if (isset($_SESSION["Form"]["effect"])) { echo $_SESSION["Form"]["effect"]; } else { echo "0"; }?>' required/>
    </div>
    <br />
    <div>
        <label for="lastname"><?php echo L::field_lastname; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="lastname" placeholder="Ex: Dupond" value='<?php if (isset($_SESSION["Form"]["lastname"])) echo $_SESSION["Form"]["lastname"]; ?>'required/>
    </div>
    <div>
        <label for="firstname"><?php echo L::field_firstnames; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="firstname" placeholder="Ex: Guillaume" value='<?php if (isset($_SESSION["Form"]["firstname"])) echo $_SESSION["Form"]["firstname"]; ?>' required/>
    </div>
    <div>
        <label for="gender"><?php echo L::field_gender; ?> <span style="color: #ff0000">*</span> :</label>
        <select class="form-control" name="gender" required>
          <option value="M" value='<?php if (isset($_SESSION["Form"]["gender"]) && $_SESSION["Form"]["gender"]=="M") echo "selected"; ?>'>Mr</option>
          <option value="MME" value='<?php if (isset($_SESSION["Form"]["gender"]) && $_SESSION["Form"]["gender"]=="F") echo "selected"; ?>'>Mme</option>
 	<option value="MLLE" value='<?php if (isset($_SESSION["Form"]["gender"]) && $_SESSION["Form"]["gender"]=="F") echo "selected"; ?>'>Mlle</option>
        </select>
    </div>
    <br />
    <div>
        <label for="title"><?php echo L::field_title; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="title" placeholder="Ex: Série ECONOMIQUE ET SOCIALE AVEC LA MENTIEN ASSEZ BIEN" title="Ex: Série ECONOMIQUE ET SOCIALE AVEC LA MENTIEN ASSEZ BIEN" value='<?php if (isset($_SESSION["Form"]["title"])) echo $_SESSION["Form"]["title"]; ?>' required/>
    </div>
    <br />
    <div>
        <label for="birthdate"><?php echo L::field_birthdate; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="birthdate" placeholder="JJ/MM/YYYY" maxlength="10" value='<?php if (isset($_SESSION["Form"]["birthdate"])) echo $_SESSION["Form"]["birthdate"]; ?>' required/>
    </div>
    <div>
        <label for="birthcity"><?php echo L::field_birthcity; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="birthcity" placeholder="Ex: Paris" value='<?php if (isset($_SESSION["Form"]["birthcity"])) echo $_SESSION["Form"]["birthcity"]; ?>' required/>
    </div>
    <div>
        <label for="birthcity_zipcode"><?php echo L::field_birthcity_zipcode; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="birthcity_zipcode" placeholder="Ex: 75" maxlength="5" value='<?php if (isset($_SESSION["Form"]["birthcity_zipcode"])) echo $_SESSION["Form"]["birthcity_zipcode"]; ?>' required/>
    </div>
    <br>
    <div>
        <label for="getdate"><?php echo L::field_getdate; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="getdate" placeholder="JJ/MM/YYYY" maxlength="10" value='<?php if (isset($_SESSION["Form"]["getdate"])) echo $_SESSION["Form"]["getdate"]; ?>' required/>
    </div>
    <div>
        <label for="getcity"><?php echo L::field_getcity; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="getcity" placeholder="Ex: Paris" value='<?php if (isset($_SESSION["Form"]["getcity"])) echo $_SESSION["Form"]["getcity"]; ?>' required/>
    </div>
    <br />

    <button id="buttonPreviewBAC" class="button-secondary pure-button" form="formBAC" style="float:left;"><?php echo L::field_submit; ?></button>
    <button type="reset" class="button-secondary pure-button" style="float:left; background-color:#ff4444; margin-left:10px;"><?php echo L::field_reset; ?></button>

</form>

</div>
  <div class="col-md-6">
    <iframe style="height: 900px; width: 100%; border: 0pt none; overflox: hidden;" name="preview" src="content/bac/empty_preview.php"/></iframe>
  </div>
</div>
