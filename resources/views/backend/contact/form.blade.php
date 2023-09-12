
                @include('backend.sessionMsg')
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email <span style="color:red" >*</span></label>
                   
                    <input type="text" class="form-control" name="email" value="{!!old('email',@$edit->email)!!}">
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook <span style="color:red" >*</span></label>
                   
                    <input type="text" class="form-control" name="facebook" value="{!!old('facebook',@$edit->facebook)!!}">
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Youtube <span style="color:red" >*</span></label>
                   
                    <input type="text" class="form-control" name="youtube" value="{!!old('youtube',@$edit->youtube)!!}">
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Address <span style="color:red" >*</span></label>
                   
                    <textarea name="address" id="general" cols="30" rows="10" class="form-control" >{!!old('address',@$edit->address)!!}</textarea>
                   
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone <span style="color:red" >*</span></label>
                   
                    <textarea name="phone" id="general" cols="30" rows="10" class="form-control" >{!!old('phone',@$edit->phone)!!}</textarea>
                   
                  </div>
                  
      
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
                <script>
                  CKEDITOR.replace( 'address' );
          </script>
            <script>
              CKEDITOR.replace( 'phone' );
      </script>