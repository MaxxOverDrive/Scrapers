<?php
include("db_connect.php");
include("simple_html_dom.php");
$html = new simple_html_dom(); ?>
  <table style="border: 1px solid black; text-align: center;">
    <tr>
      <td style="border: 1px solid black; font-weight: 800; font-size: 125%;">Model Number</td>
      <td style="border: 1px solid black; font-weight: 800; font-size: 125%;">List Price</td>
      <td style="border: 1px solid black; font-weight: 800; font-size: 125%;">Our Cost</td>
      <td style="border: 1px solid black; font-weight: 800; font-size: 125%;">Digital Buyer</td>
      <td style="border: 1px solid black; font-weight: 800; font-size: 125%;">Global Industrial</td>
    </tr>
<?php
  for($i = 0; $i <= COUNT($modelNumber); $i++) {
    ini_set('max_execution_time', 300); ?>
    <tr>
      <td style="border: 1px solid black;"><?php echo $modelNumber[$i]; ?></td>
      <td style="border: 1px solid black;"><?php echo round($listPrice[$i], 2); ?></td>
      <td style="border: 1px solid black;"><?php echo round($ourCost[$i], 2); ?></td>
    <?php
      //DIGITAALBUYER.COM
      $digitalBuyerURL = $html->load_file("https://www.digitalbuyer.com/catalogsearch/result/?dir=desc&order=relevance&q=.$modelNumber[$i]");
      $digitalFindModel = $html->find("div.category-products ul.products-grid li h2.product-name a");
      $digitalModel = $digitalFindModel[0]->plaintext;
      $digitalFindPrice = $html->find("div.category-products ul.products-grid li div.price-box div.uni-price-group div.uni-price-box div.uni-price-inner-box span.price");
      $digitalPrice = $digitalFindPrice[0]->plaintext;

      if(strpos($digitalModel, " ".$modelNumber[$i]." ")) { ?>
            <td style='border: 1px solid black;'><?php echo $digitalPrice; ?></td>
      <?php  }
        else { ?>
            <td style='border: 1px solid black;'>None</td>
      <?php  }
      //GLOBALiNDUSTRIAL.COM
      $globalFindModel = $html->find("div.grid ul.prod li div.info p.title a");
      $globalModel = $globalFindModel[0]->plaintext;
      $globalFindPrice = $html->find("div.grid ul.prod li div.pricing div.prices p.price");
      $globalPrice = $globalFindPrice[0]->plaintext;

      if(strpos($globalModel, " ".$modelNumber[$i]." ")) { ?>
            <td style='border: 1px solid black;'><?php echo $globalPrice; ?></td>
          </tr>
      <?php  }
      else { ?>
            <td style='border: 1px solid black;'>None</td>
          </tr>
    <?php }
  } ?>
</table>
