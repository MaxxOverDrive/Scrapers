<!--TABLE SEARCHES -->
<div style="margin-top: 5%;" class="row text-center">

      <div class="col-md-6">
        <form action="index.php" method="POST">
          <!--CHANGE INPUT TO BINARY OR HEXDECIMAL -->
          <div class="form-group">
              <h4 for="decode_type">Decode Type</h4>
              <select class="form-control" name="decode_type">
                <option>Decode Type</option>
                <option>Binary</option>
                <option>Hexidecimal</option>
              </select>
          </div>
          <div class="form-group">
              <h4 for="decode_text">Decode String</h4>
              <input class="form-control" type="text" name="decode_text">
          </div>
          <div class="form-group">
              <button class="btn btn-outline-primary" type="submit" name="decode_text_submit">Decode</button>
          </div>
        </form>
      </div>

      <div class="col-md-6">
        <form action="index.php" method="POST">
          <div class="form-group">
              <h4 for="encode_type">Encode Type</h4>
              <select class="form-control" name="encode_type">
                <option>Encode Type</option>
                <option>Binary</option>
                <option>Hexidecimal</option>
              </select>
          </div>
          <div class="form-group">
              <h4 for="bin_text">Encode String</h4>
              <input class="form-control" type="text" name="encode_text">
          </div>
          <div class="form-group">
              <button class="btn btn-outline-danger" type="submit" name="encode_text_submit">Encode</button>
          </div>
        </form>
      </div>

</div><!--END OF ROW -->
