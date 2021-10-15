<label class="form-label" for="first_name">First Name</label>
<input class="form-label" type="text" name="first_name" id="first_name" value="{{old('first_name', $musician->first_name)}}">
<label class="form-label" for="last_name">Last Name</label>
<input class="form-label" type="text" name="last_name" id="last_name" value="{{old('last_name', $musician->last_name)}}">
<label class="form-label" for="instrument">Instrument</label>
<input class="form-label" type="text" name="instrument" id="instrument" value="{{old('instrument', $musician->instrument)}}">
<label class="form-label" for="website">Website</label>
<input class="form-label" type="text" name="website" id="website" value="{{old('website', $musician->website)}}">