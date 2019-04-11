<?php

$fields = array (
  'date' => 'Date',
  'companyName' => 'Company Name',
  'firstName' => 'First Name',
  'lastName' => 'Last Name',
  'title' => 'Title',
  'address' => 'Address',
  'address2' => 'Address 2',
  'country' => 'Country',
  'state' => 'State/Province',
  'zip' => 'Zip Code',
  'phoneAreaCode' => 'Phone Area Code',
  'phoneNumber' => 'Phone Number',
  'faxAreaCode' => 'Fax Area Code',
  'faxNumber' => 'Fax Number',
  'email' => 'Email',
  'solidsVolumePercent' => 'What is the percentage of solids present by volume?',
  'solidsPpm' => 'What is the solids concentration by ppmw?',
  'solidsWeight' => 'What is the percentage of solids present by weight?',
  'solidsBulkDensityWetKgM3' => 'What is the bulk density of the cake wet?',
  'solidsBulkDensityDryKgM3' => 'What is the bulk density of the cake dry?',
  'liquidPhraseDescription' => 'Describe the liquid phase of the liquid to be filtered (Chemical or technical description)',
  'liquidType' => 'Is the liquid?',
  'liquidAcidOrBaseDescription' => 'if the liquid is acidic or basic describe the acids or bases',
  'liquidPhLevel' => 'ph Level',
  'liquidOther' => 'other',
  'liquidSpecificGravity' => 'What is the specific gravity of the liquid to be filtered?',
  'solidsToBeRemovedDescription' => 'Describe the solids which are to be removed',
  'solidsWhenWet' => 'Are the solids (in the wet and dry stage, before and after washing of the cake)',
  'particleSizeAverageMicron' => 'What is the particle size in micron?',
  'solidsSedimentationSpeedSlurry' => 'What is the sedimentation speed of the solids in the slurry?',
  'processType' => '',
  'processTypeBatchSizeGallons' => 'How many gallons is your batch size?',
  'processTypeBatchNumber24Hours' => 'How many batches per 24 hours?',
  'processTypeBatchFiltrationTimeHrs' => 'What is the time span in which a batch must be filtered? Enter cps',
  'processTypeBatchBatchTimeHrs' => 'What is the time span in which a batch must be filtered? Enter Degrees',
  'filtrationPurpose' => '',
  'filterTempC' => 'At what temperature do you wish to filter',
  'washResidue' => 'Must you wash residue in the filter?',
  'howResidueDischarged' => 'How must the filter residue be discharged?',
  'howDryCake' => 'How will you dry your cake:',
  'temperatureDryCake' => 'At what temperature will you dry the cake?',
  'typeFilterUsedUpToNow' => 'What type of filter has been used for this purpose up to now?',
  'sizeFilterUsedUpToNow' => 'What size of filter has been used for this purpose up to now?',
  'sizeScreensUsedUpToNow' => 'What type of screens has been used for this purpose up to now?',
  'precoat' => 'Do you precoat your filter?',
  'precoatType' => 'What type of precoat do you use?',
  'precoatTypeOther' => '',
  'addBodyFeed' => 'Is it necessary to add body feed?',
  'bodyFeedAmountLbs' => 'What is the amount of body feed required?',
  'filtrationRateExistingLHrM2' => 'What is the filtration rate in your existing filter, or obtained from tests?',
  'pressureDropExistingPsig' => 'What is the pressure drop in your existing filter at the end of filtration?',
  'maximumCakeThicknessInches' => 'What maximum cake thickness can you achieve?',
  'materialsConstructionShouldBeUsed' => 'Based on your Knowledge of your product, what materials of construction should be used for the filter?',
  'typeFilterPlates' => 'What type of filter plates are required?',
  'requiredMaterialFilterScreens' => 'Which material is required for your filter screens?',
  'micronSizeFilterScreens' => 'Which micron size is required for your filter screens?',
  'gasketingMaterial' => 'What gasketing material is required?',
  'oRingMaterial' => 'What o-ring material is required?',
  'typeUpperSeal' => 'What type of upper seal is required?',
  'typeUpperLipSealOther' => 'Other',
  'requireUpperLipSealPot' => 'Would you require a seal pot?',
  'typeLowerBearingSeal' => 'What type of lower bearing/seal is required?',
  'requireLowerBearingSealPot' => 'Would you require a seal pot?',
  'typeFundaDrive' => 'What type of Funda drive would you need?',
  'jacketRequired' => 'Is a jacket required?',
  'jacketRequiredOther' => 'Other',
  'isInsulationWeldedSheathingRequired' => 'Is insulation with a welded sheathing required?',
  'vesselInteriorFinish' => 'What is your interior finish of the vessel?',
  'vesselInteriorFinishOther' => 'Other',
  'raFinish' => 'What is the RA finish?',
  'vesselExteriorFinish' => 'What is your exterior finish of the vessel?',
  'vesselExteriorFinishOther' => 'Other',
  'typeBodyFlangeClamping' => 'What type of body flange clamping type would you prefer?',
  'typeBodyFlangeClampingOther' => 'Other',
  'typeCakeDischargeValve' => 'What type of cake discharge valve would you require?',
  'typeCakeDischargeValveOther' => 'Other',
  'wantSupplyWithControlSystem' => 'Do you want us to supply you with a control system?',
  'requireCleanInPlace' => 'Do you require Clean-In-Place for your Funda filter?',
  'interestedRentingFilter' => 'Are you interested in renting a Funda Filter?',
  'sureTypeFilter' => 'Are you sure what type of filter is best for your process?',
  'rentalUnit' => 'Which rental unit would you like to use?',
  'rentalWeeks' => 'For how many weeks would you like to rent a Funda filter?',
  'installationOperationSupport' => 'Will you need installation process or operation support?',
  'whereTests' => 'Where would you like to perform these tests?',
  'additionalComments' => 'Additional comments and application data',
  );


 
//file_put_contents("log.txt", print_r($_POST, true));


$body = "<h1>Submitted Funda Filter Questionnaire</h1>";
foreach ($fields as $field => $label) {
	if (isset($_POST[$field])) {

		$value = '';
		if (is_array($_POST[$field])) {
			$value = implode(', ', $_POST[$field]);
		} else {
			$value = $_POST[$field];
    }

    
		$body .= $label . ":<b>" . " " . $value . "</b><br><br>";
		
	}
}


$headers .= "Content-Type: text/html";
mail('alberto@jp-webs.com', 'Steri Funda Filter Questionnaire', $body, $headers);


