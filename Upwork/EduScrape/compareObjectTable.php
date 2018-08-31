<?php

if(($current_school === $scraped_school) && ($current_phone === $scraped_phone) && ($current_county === $scraped_county) && ($current_mailing_address === $scraped_mailing_address) && ($current_physical_address === $scraped_physical_address) && ($current_approved_programs === $scraped_approved_programs) ) {
  $sameRow++;
  break;
}
else {//ALL IS NOT EQUIAL

  if($current_school !== $scraped_school) {
      ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $current_school; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_phone; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_county; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_mailing_address; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_physical_address; ?></td><?php
      ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_approved_programs; ?></td></tr><?php
  }

  if($current_phone !== $scraped_phone) {
    ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_school; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $current_phone; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_county; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_mailing_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_physical_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_approved_programs; ?></td></tr><?php
  }

  if($current_county !== $scraped_county) {
    ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_school; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_phone; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $current_county; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_mailing_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_physical_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_approved_programs; ?></td></tr><?php
  }

  if($current_mailing_address !== $scraped_mailing_address) {
    ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_school; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_phone; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_county; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $current_mailing_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_physical_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_approved_programs; ?></td></tr><?php
  }

  if($current_physical_address !== $scraped_physical_address) {
    ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_school; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_phone; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_county; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_mailing_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $current_physical_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_approved_programs; ?></td></tr><?php
  }

  if($current_approved_programs !== $scraped_approved_programs) {
    ?><tr><td><input type="checkbox" class="form-check-input" name="export_single_csv" value="<?php echo $school_scrape_id; ?>"></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_school; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_phone; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_county; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_mailing_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $scraped_physical_address; ?></td><?php
    ?><td scope="col" style="border: 1px solid black; font-weight: bold;"><?php echo $current_approved_programs; ?></td></tr><?php
  }

}//END OF ELSE ALL IS NOT EQUAL

?>
