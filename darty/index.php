<div class="row">
  <div class="col-md-6">

<form id="formdarty" action="content/darty/generate_preview.php" method="post" target="preview" enctype="multipart/form-data">
    <h2>Informations de Base</h2>
    <h5 style="color:#ff0000">* : champs obligatoires</h5>
    <div>
        <label for="effect"><?php echo L::field_effect; ?>  <span style="color:#ff0000">*</span> :</label>
        <input class="form-control-light" max="50" min="0" type="range" name="effect" value='<?php if (isset($_SESSION["Form"]["effect"])) { echo $_SESSION["Form"]["effect"]; } else { echo "0"; }?>' required/>
    </div>
    <br />
    <div>
        <label for="lastname"><?php echo L::field_lastname; ?>  <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="lastname" placeholder="Ex: Dupond" value='<?php if (isset($_SESSION["Form"]["lastname"])) echo $_SESSION["Form"]["lastname"]; ?>'required/>
    </div>
    <div>
        <label for="firstname"><?php echo L::field_firstnames; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="firstname" placeholder="Ex: Guillaume" value='<?php if (isset($_SESSION["Form"]["firstname"])) echo $_SESSION["Form"]["firstname"]; ?>' required/>
    </div>
    <div>
        <label for="gender"><?php echo L::field_gender; ?> <span style="color: #ff0000">*</span> :</label>
        <select class="form-control" name="gender" required>
          <option value="MR" value='<?php if (isset($_SESSION["Form"]["gender"]) && $_SESSION["Form"]["gender"]=="MR") echo "selected"; ?>'>Mr</option>
          <option value="MME" value='<?php if (isset($_SESSION["Form"]["gender"]) && $_SESSION["Form"]["gender"]=="MME") echo "selected"; ?>'>Mme</option>
 	      <option value="MLLE" value='<?php if (isset($_SESSION["Form"]["gender"]) && $_SESSION["Form"]["gender"]=="MLLE") echo "selected"; ?>'>Mlle</option>
        </select>
    </div>
    <br />
    <div>
        <label for="address"><?php echo L::field_address; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="address" placeholder="Ex: 10 rue Saint André" value='<?php if (isset($_SESSION["Form"]["address"])) echo $_SESSION["Form"]["address"]; ?>' required/>
    </div>
    <div>
        <label for="address_city"><?php echo L::field_address_city; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="address_city" placeholder="Ex: Paris" value='<?php if (isset($_SESSION["Form"]["address_city"])) echo $_SESSION["Form"]["address_city"]; ?>' required/>
    </div>
    <div>
        <label for="address_zipcode"><?php echo L::field_address_zipcode; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="number" name="address_zipcode" placeholder="Ex: 75002" min="0" max="99999" value='<?php if (isset($_SESSION["Form"]["address_zipcode"])) echo $_SESSION["Form"]["address_zipcode"]; ?>' required/>
    </div>
    <br />
    <div>
        <label for="product"><?php echo L::field_product; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="product" placeholder="Ex: CONSOLE PLAYSTATION 4 1TO + STAR WARS : BATTLEFRONT - ÉDITION LIMITÉE" value='<?php if (isset($_SESSION["Form"]["product"])) echo $_SESSION["Form"]["product"]; ?>' required/>
    </div>
    <div>
        <label for="price"><?php echo L::field_price; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="number" step="0.01" name="price" placeholder="Ex: 399.99" value='<?php if (isset($_SESSION["Form"]["price"])) echo $_SESSION["Form"]["price"]; ?>' required/>
    </div>
    <div>
        <label for="eco"><?php echo L::field_deee; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="number" step="0.01" name="eco" placeholder="Ex: 0.02" value='<?php if (isset($_SESSION["Form"]["eco"])) echo $_SESSION["Form"]["eco"]; ?>' required/>
    </div>
    <div>
        <label for="quantity"><?php echo L::field_quantity; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="number" name="quantity" value='<?php if (isset($_SESSION["Form"]["quantity"])) echo $_SESSION["Form"]["quantity"]; else echo "1"; ?>' required/>
    </div>
    <div>
        <label for="tva"><?php echo L::field_tva; ?> <span style="color: #ff0000">*</span> :</label>
        <select class="form-control" name="tva" required>
          <option value="20" value='<?php if (isset($_SESSION["Form"]["tva"]) && $_SESSION["Form"]["tva"]=="20") echo "selected"; ?>'>20%</option>
          <option value="5" value='<?php if (isset($_SESSION["Form"]["tva"]) && $_SESSION["Form"]["tva"]=="5") echo "selected"; ?>'>5.5%</option>
        </select>
    </div>
    <div>
        <label for="paymethod"><?php echo L::field_paymethod; ?> <span style="color: #ff0000">*</span> :</label>
        <select class="form-control" name="paymethod" required>
          <option value="0" value='<?php if (isset($_SESSION["Form"]["paymethod"]) && $_SESSION["Form"]["paymethod"]=="0") echo "selected"; ?>'>Carte Bleue</option>
          <option value="1" value='<?php if (isset($_SESSION["Form"]["paymethod"]) && $_SESSION["Form"]["paymethod"]=="1") echo "selected"; ?>'>Chèque</option>
          <option value="2" value='<?php if (isset($_SESSION["Form"]["paymethod"]) && $_SESSION["Form"]["paymethod"]=="2") echo "selected"; ?>'>Virement Bancaire</option>
        </select>
    </div>
    <br />
    <div>
        <label for="buyDate"><?php echo L::field_buydate; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="buyDate" placeholder="JJ/MM/YYYY" maxlength="10" value='<?php if (isset($_SESSION["Form"]["buyDate"])) echo $_SESSION["Form"]["buyDate"]; ?>' required/>
    </div>
    <div>
        <label for="shipDate"><?php echo L::field_shipdate; ?> <span style="color:#ff0000">*</span> :</label>
        <input class="form-control" type="text" name="shipDate" placeholder="JJ/MM/YYYY" maxlength="10" value='<?php if (isset($_SESSION["Form"]["shipDate"])) echo $_SESSION["Form"]["shipDate"]; ?>' required/>
    </div>
    <br />
    <h2>Informations Facultatives</h2>
    <div>
        <label for="ordernumber"><?php echo L::field_ordernumber; ?></label>
        <input class="form-control" type="text" name="ordernumber" placeholder="Ex: 9450404056568" value='<?php if (isset($_SESSION["Form"]["ordernumber"])) echo $_SESSION["Form"]["ordernumber"]; ?>'/>
    </div>
    <div>
        <label for="ref"><?php echo L::field_refproduct; ?></label>
        <input class="form-control" type="text" name="ref" placeholder="Ex: 344446" value='<?php if (isset($_SESSION["Form"]["ref"])) echo $_SESSION["Form"]["ref"]; ?>'/>
    </div>

    <input type="hidden" name="randnumcommand" value='<?php echo rand(100,999); ?>' />
    <input type="hidden" name="randproductref" value='<?php echo rand(100000,999999); ?>' />

    <br />

    <button id="buttonPreviewdarty" class="button-secondary pure-button" form="formdarty" style="float:left;"><?php echo L::field_submit; ?></button>
    <button type="reset" class="button-secondary pure-button" style="float:left; background-color:#ff4444; margin-left:10px;"><?php echo L::field_reset; ?></button>
</form>

</div>
  <div class="col-md-6">
    <iframe style="height: 900px; width: 100%; border: 0pt none; overflox: hidden;" name="preview" src="content/darty/empty_preview.php"/></iframe>
  </div>
</div>
