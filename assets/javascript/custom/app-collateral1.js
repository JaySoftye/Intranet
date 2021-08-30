var collateralOneArray = [];
  collateralOneArray[0] = {
    title : "Business Cards *",
    value : "businesscards",
    color : "blue",
  };
  collateralOneArray[1] = {
    title : "Personalized SAE circle labels *",
    value : "saelabels",
    color : "blue",
  };
  collateralOneArray[2] = {
    title : "Single Sheet STEM Solutions *",
    value : "singlesheetstem",
    color : "blue",
  };
  collateralOneArray[3] = {
    title : "OTIS for educators (full) Booklet",
    value : "otisForEducatorsFullBooklet",
    color : "green",
  };
  collateralOneArray[4] = {
    title : "OTIS Datasheet",
    value : "otis",
    color : "blue",
  };
  collateralOneArray[5] = {
    title : "NEXT Catalog",
    value : "nextCatalog",
    color : "green",
  };
  collateralOneArray[6] = {
    title : "STEM Bundles (NYC)",
    value : "stembundlescdwnyc",
    color : "green",
  };
  collateralOneArray[7] = {
    title : "STEM Bundles (Districts)",
    value : "stembundlescdwdistricts",
    color : "green",
  };
  collateralOneArray[8] = {
    title : "STEM Grade Band Compatibility Chart",
    value : "gradeBandCompatibilityChart",
    color : "blue",
  };
  collateralOneArray[9] = {
    title : "Evospaces Datasheet",
    value : "evospacesDatasheet",
    color : "blue",
  };
  collateralOneArray[10] = {
    title : "SMART 6000 Series",
    value : "smart6000series",
    color : "blue",
  };
  collateralOneArray[11] = {
    title : "SMART 7000 Series",
    value : "smart7000series",
    color : "blue",
  };
  collateralOneArray[12] = {
    title : "SMART MX Series",
    value : "smartmxseries",
    color : "blue",
  };
  collateralOneArray[13] = {
    title : "SMART Learning Suite",
    value : "smartlearningsuite",
    color : "blue",
  };
  collateralOneArray[14] = {
    title : "iBlocks pathways",
    value : "iblockspathways",
    color : "green",
  };
  collateralOneArray[15] = {
    title : "Rube Goldberg Sample iBlock",
    value : "rubeGoldbergSampleIblock",
    color : "green",
  };
  collateralOneArray[16] = {
    title : "Prosthetics Sample iBlock",
    value : "prostheticsSampleIblock",
    color : "green",
  };
  collateralOneArray[17] = {
    title : "Design a Comic Book Sample iBlock",
    value : "designComicBookSampleIblock",
    color : "green",
  };
  collateralOneArray[18] = {
    title : "iBlocks NYCDOE Pricing",
    value : "iblocksnycdoepricing",
    color : "blue",
  };
  collateralOneArray[19] = {
    title : "iBlocks CDW Pricing",
    value : "iblockscdwpricing",
    color : "blue",
  };
  collateralOneArray[20] = {
    title : "iBlocks NYS Pricing",
    value : "iblocksnyspricing",
    color : "blue",
  };
  collateralOneArray[21] = {
    title : "iBlocks PEPPM Pricing",
    value : "iblockspeppmpricing",
    color : "blue",
  };

  var containerOne = document.getElementById('collateralOne');

  for (x = 0; x++) {
    var rowCheckbox = document.createElement('tr');
        rowCheckbox.innerHTML = '<td><label class="detail-check ' + collateralOneArray[x].color + '" for="quantity_' + collateralOneArray[x].value + '">' + collateralOneArray[x].title + '</label></td><td><input type="text" placeholder="--" name="quantity_' + collateralOneArray[x].value + '"></td></tr>';

      containerOne.appendChild(rowCheckbox);
  }
