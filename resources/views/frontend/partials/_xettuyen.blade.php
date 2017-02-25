<div>
	<h4>Hướng dẫn nhập hồ sơ xét tuyển</h4>
	<p style="text-align: left;">Sau khi có kết quả điểm thi HK1 / HK2 lớp 12 hoặc điểm thi THPT Quốc gia, thí sinh có thể đăng ký xét tuyển vào Trường Cao đẳng Viễn Đông thông qua hệ thống này.</p>
	<p style="text-align: left;">Thí sinh đăng ký, vui lòng nhập đầy đủ các thông tin vào form mẫu dưới đây (lưu ý: gõ đầy đủ dấu tiếng Việt)</p>
</div>

<div style="border: 2px dashed #ccc; padding: 15px; margin-bottom: 20px;">
	<h4>Bước 1: Thông tin thí sinh</h4>
	<div class="form-group">
	    {!! Form::label('hoten', 'Họ tên', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
	    <div class="col-md-5 col-sm-6">
	        {!! Form::text('hoten', null, ['class' => 'form-control', 'placeholder' => 'Họ và tên thí sinh']) !!}
	        {!! $errors->first('hoten', '<span class="help-block">:message</span>') !!}
	    </div>
	    {!! Form::label('CMND', 'CMND', ['class' => 'col-md-1 col-sm-6 control-label']) !!}
	    <div class="col-md-4 col-sm-6">
	        {!! Form::text('CMND', null, ['class' => 'form-control', 'placeholder' => 'CMND']) !!}
	        {!! $errors->first('CMND', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('ngaysinh', 'Ngày sinh', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
	    <div class="col-md-5 col-sm-6">
	        {!! Form::text('ngaysinh', null, ['class' => 'form-control', 'placeholder' => 'Ngày sinh']) !!}
	        {!! $errors->first('ngaysinh', '<span class="help-block">:message</span>') !!}
	    </div>
	    {!! Form::label('gioitinh', 'Giới tính', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
	    <div class="col-md-3 col-sm-6">
        	{!! Form::select('gioitinh', array('' => 'Chọn','Nam' => 'Nam', 'Nu' => 'Nữ'), null, ['class' => 'form-control', 'id' => 'sel1'])  !!}
	        {!! $errors->first('gioitinh', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('dangkybachoc', 'Đăng ký bậc học', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
	    <div class="col-md-9 col-sm-6">
        	{!! Form::select('dangkybachoc', array('' => 'Chọn','1' => 'Đại học từ xa', '2' => 'Cao đẳng chính quy', '3' => 'Cao đẳng nghề', '4' => 'Trung cấp chuyên nghiệp'), null, ['class' => 'form-control', 'id' => 'sel1'])  !!}
	        {!! $errors->first('dangkybachoc', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('nganhhoc', 'Ngành học', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
	    <div class="col-md-5 col-sm-6">
        	{!! Form::select('nganhhoc', array('' => 'Chọn','1' => 'Công nghệ kỹ thuật cơ khí', '2' => 'Công Nghệ Kỹ Thuật Ô Tô','3' => 'Công Nghệ Kỹ Thuật Điện - Điện tử', '4' => 'Công nghệ kỹ thuật xây dựng (Dân dụng)','5' => 'Công nghệ kỹ thuật xây dựng (Cầu đường)', '6' => 'Quản trị kinh doanh (QT Marketing)'), null, ['class' => 'form-control', 'id' => 'sel1'])  !!}
	        {!! $errors->first('nganhhoc', '<span class="help-block">:message</span>') !!}
	    </div>
	    {!! Form::label('khoixettuyen', 'Khối xét tuyển', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
	    <div class="col-md-3 col-sm-6">
        	{!! Form::select('khoixettuyen', array('' => 'Chọn','1' => 'A00-Toán-Lý-Hóa'), null, ['class' => 'form-control', 'id' => 'sel1'])  !!}
	        {!! $errors->first('khoixettuyen', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('doituongthuockhuvucuutien', 'Đối tượng thuộc khu vực ưu tiên', ['class' => 'col-md-3 col-sm-6 control-label']) !!}
	    <div class="col-md-3 col-sm-6">
        	{!! Form::select('doituongthuockhuvucuutien', array('' => 'Chọn','1' => '01', '2' => '02','3' => '03', '4' => '04','5' => '05', '6' => '06'), null, ['class' => 'form-control', 'id' => 'sel1'])  !!}
	        {!! $errors->first('doituongthuockhuvucuutien', '<span class="help-block">:message</span>') !!}
	    </div>
	    {!! Form::label('khuvuc', 'Khu vực', ['class' => 'col-md-3 col-sm-6 control-label']) !!}
	    <div class="col-md-3 col-sm-6">
        	{!! Form::select('khuvuc', array('' => 'Chọn','KV1' => 'KV1', 'KV2' => 'KV2', 'KV2NT' => 'KV2NT', 'KV3' => 'KV3'), null, ['class' => 'form-control', 'id' => 'sel1'])  !!}
	        {!! $errors->first('khuvuc', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
</div> <!--END THONG TIN THI SINH-->

<p style="color: red; text-align: left;">Nếu xét tuyển từ điểm Học bạ THPT/THBT thì điền đầy đủ thông tin ở Bước 2: 1</p>
<p style="color: red; text-align: left;">Nếu xét tuyển từ điểm kỳ thi THPT quốc gia thì điền đầy đủ thông tin ở Bước 2: 2</p>

<!--Bước 2: 1 - Xét tuyển từ kết quả học bạ THPT/THBT-->
<div style="border: 2px dashed #ccc; padding: 15px; margin-bottom: 20px;">
	<h4>Bước 2: 1 - Xét tuyển từ kết quả học bạ THPT/THBT</h4>
	<ul class="nav nav-tabs">
	  <li class="active"><a data-toggle="tab" href="#cach1">Xét 2 HK lớp 12</a></li>
	  <li><a data-toggle="tab" href="#cach2">Xét 2 HK lớp 11 và HK 1 lớp 12</a></li>
	</ul>

 	<p>Bạn hãy nhập điểm theo thứ tự các môn: </p>
	<p style="color: red;">Lưu ý nhập số điểm lẻ: vd 5.2, 6.5, 7.7</p>
	<div class="tab-content">
	 	<!-- XET CACH 1 -->
		<div id="cach1" class="tab-pane fade in active">
			<div class="form-group">
				<p style="padding-left: 40px;text-align:left;"><strong>Môn 1:</strong></p>
			    {!! Form::label('x1mon1diemhocky1lop12', 'Điểm HK 1 lớp 12 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-4 col-sm-6">
			        {!! Form::text('x1mon1diemhocky1lop12', null, ['class' => 'form-control', 'placeholder' => 'Điểm HK 1 lớp 12 (*)']) !!}
			        {!! $errors->first('x1mon1diemhocky1lop12', '<span class="help-block">:message</span>') !!}
			    </div>
			    {!! Form::label('x1mon1diemhocky2lop12', 'Điểm HK 2 lớp 12 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-4 col-sm-6">
			        {!! Form::text('x1mon1diemhocky2lop12', null, ['class' => 'form-control', 'placeholder' => 'Điểm HK 2 lớp 12 (*)']) !!}
			        {!! $errors->first('x1mon1diemhocky2lop12', '<span class="help-block">:message</span>') !!}
			    </div>
			</div>
			<div class="form-group">
				<p style="padding-left: 40px;text-align:left;"><strong>Môn 2:</strong></p>
			    {!! Form::label('x1mon2diemhocky1lop12', 'Điểm HK 1 lớp 12 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-4 col-sm-6">
			        {!! Form::text('x1mon2diemhocky1lop12', null, ['class' => 'form-control', 'placeholder' => 'Điểm HK 1 lớp 12 (*)']) !!}
			        {!! $errors->first('x1mon2diemhocky1lop12', '<span class="help-block">:message</span>') !!}
			    </div>
			    {!! Form::label('x1mon2diemhocky2lop12', 'Điểm HK 2 lớp 12 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-4 col-sm-6">
			        {!! Form::text('x1mon2diemhocky2lop12', null, ['class' => 'form-control', 'placeholder' => 'Điểm HK 2 lớp 12 (*)']) !!}
			        {!! $errors->first('x1mon2diemhocky2lop12', '<span class="help-block">:message</span>') !!}
			    </div>
			</div>
			<div class="form-group">
				<p style="padding-left: 40px;text-align:left;"><strong>Môn 3:</strong></p>
			    {!! Form::label('x1mon3diemhocky1lop12', 'Điểm HK 1 lớp 12 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-4 col-sm-6">
			        {!! Form::text('x1mon3diemhocky1lop12', null, ['class' => 'form-control', 'placeholder' => 'Điểm HK 1 lớp 12 (*)']) !!}
			        {!! $errors->first('x1mon3diemhocky1lop12', '<span class="help-block">:message</span>') !!}
			    </div>
			    {!! Form::label('x1mon3diemhocky2lop12', 'Điểm HK 2 lớp 12 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-4 col-sm-6">
			        {!! Form::text('x1mon3diemhocky2lop12', null, ['class' => 'form-control', 'placeholder' => 'Điểm HK 2 lớp 12 (*)']) !!}
			        {!! $errors->first('x1mon3diemhocky2lop12', '<span class="help-block">:message</span>') !!}
			    </div>
			</div>		
		</div> 
		<!-- END XET CACH 1 -->
		<!-- XET CACH 2 -->
		<div id="cach2" class="tab-pane fade"> 
			<div class="form-group">
				<p style="padding-left: 40px;text-align:left;"><strong>Môn 1:</strong></p>
			    {!! Form::label('x2m1hocky1_11', 'Điểm HK 1 lớp 11 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-2 col-sm-6">
			        {!! Form::text('x2m1hocky1_11', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			        {!! $errors->first('x2m1hocky1_11', '<span class="help-block">:message</span>') !!}
			    </div>
			    {!! Form::label('x2m1hocky2_11', 'Điểm HK 2 lớp 11 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-2 col-sm-6">
			        {!! Form::text('x2m1hocky2_11', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			        {!! $errors->first('x2m1hocky2_11', '<span class="help-block">:message</span>') !!}
			    </div>
			    {!! Form::label('x2m1hocky1_12', 'Điểm HK 1 lớp 12 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-2 col-sm-6">
			        {!! Form::text('x2m1hocky1_12', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			        {!! $errors->first('x2m1hocky1_12', '<span class="help-block">:message</span>') !!}
			    </div>
			</div>
			<div class="form-group">
				<p style="padding-left: 40px;text-align:left;"><strong>Môn 2:</strong></p>
			    {!! Form::label('x2m2hocky1_11', 'Điểm HK 1 lớp 11 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-2 col-sm-6">
			        {!! Form::text('x2m2hocky1_11', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			        {!! $errors->first('x2m2hocky1_11', '<span class="help-block">:message</span>') !!}
			    </div>
			    {!! Form::label('x2m2hocky2_11', 'Điểm HK 2 lớp 11 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-2 col-sm-6">
			        {!! Form::text('x2m2hocky2_11', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			        {!! $errors->first('x2m2hocky2_11', '<span class="help-block">:message</span>') !!}
			    </div>
			    {!! Form::label('x2m2hocky1_12', 'Điểm HK 1 lớp 12 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-2 col-sm-6">
			        {!! Form::text('x2m2hocky1_12', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			        {!! $errors->first('x2m2hocky1_12', '<span class="help-block">:message</span>') !!}
			    </div>
			</div>
			<div class="form-group">
				<p style="padding-left: 40px;text-align:left;"><strong>Môn 3:</strong></p>
			    {!! Form::label('x2m3hocky1_11', 'Điểm HK 1 lớp 11 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-2 col-sm-6">
			        {!! Form::text('x2m3hocky1_11', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			        {!! $errors->first('x2m3hocky1_11', '<span class="help-block">:message</span>') !!}
			    </div>
			    {!! Form::label('x2m3hocky2_11', 'Điểm HK 2 lớp 11 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-2 col-sm-6">
			        {!! Form::text('x2m3hocky2_11', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			        {!! $errors->first('x2m3hocky2_11', '<span class="help-block">:message</span>') !!}
			    </div>
			    {!! Form::label('x2m3hocky1_12', 'Điểm HK 1 lớp 12 (*):', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
			    <div class="col-md-2 col-sm-6">
			        {!! Form::text('x2m3hocky1_12', null, ['class' => 'form-control', 'placeholder' => '']) !!}
			        {!! $errors->first('x2m3hocky1_12', '<span class="help-block">:message</span>') !!}
			    </div>
			</div>		
		</div> <!-- END XET CACH 2 -->
	</div>

	<div class="form-group">
	    {!! Form::label('dahoctruong', 'Đã học trường', ['class' => 'col-md-3 col-sm-9 control-label']) !!}
	    <div class="col-md-9 col-sm-6">
	        {!! Form::text('dahoctruong', null, ['class' => 'form-control', 'placeholder' => 'Đã học trường']) !!}
	        {!! $errors->first('dahoctruong', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>	
	<div class="form-group">
	    {!! Form::label('hanhkiem11', 'Hạnh kiểm 11', ['class' => 'col-md-3 col-sm-9 control-label']) !!}
	    <div class="col-md-4 col-sm-6">
	        {!! Form::text('hanhkiem11', null, ['class' => 'form-control', 'placeholder' => 'Hạnh kiểm 11']) !!}
	        {!! $errors->first('hanhkiem11', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>	
	<div class="form-group">
	    {!! Form::label('hanhkiem12', 'Hạnh kiểm 12', ['class' => 'col-md-3 col-sm-9 control-label']) !!}
	    <div class="col-md-4 col-sm-6">
	        {!! Form::text('hanhkiem12', null, ['class' => 'form-control', 'placeholder' => 'Hạnh kiểm 12']) !!}
	        {!! $errors->first('hanhkiem12', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>	
</div>

<div style="border: 2px dashed #ccc; padding: 15px; margin-bottom: 20px;">
	<h4>Bước 2: 2 - Xét tuyển từ kết quả kỳ thi THPT Quốc gia</h4>
	<div class="form-group">
	    {!! Form::label('madangkyxettuyenhoacsbd', 'Mã đăng ký xét tuyển hoặc Số báo danh', ['class' => 'col-md-6 col-sm-6 control-label']) !!}
	    <div class="col-md-6 col-sm-6">
	        {!! Form::text('madangkyxettuyenhoacsbd', null, ['class' => 'form-control', 'placeholder' => 'Mã đăng ký xét tuyển hoặc Số báo danh']) !!}
	        {!! $errors->first('madangkyxettuyenhoacsbd', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
	<p style="color: red;">Nhập đúng theo Mã ĐKXT hoặc Số báo danh <br> được hiển thị trên giấy kết quả của kỳ thi THPT Quốc gia</p>
	<div class="form-group">
	    {!! Form::label('nhapdiemmon1', 'Nhập điểm Môn 1: (*)', ['class' => 'col-md-4 col-sm-6 control-label']) !!}
	    <div class="col-md-5 col-sm-6">
	        {!! Form::text('nhapdiemmon1', null, ['class' => 'form-control', 'placeholder' => 'Nhập điểm Môn 1']) !!}
	        {!! $errors->first('nhapdiemmon1', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('nhapdiemmon2', 'Nhập điểm Môn 2: (*)', ['class' => 'col-md-4 col-sm-6 control-label']) !!}
	    <div class="col-md-5 col-sm-6">
	        {!! Form::text('nhapdiemmon2', null, ['class' => 'form-control', 'placeholder' => 'Nhập điểm Môn 2']) !!}
	        {!! $errors->first('nhapdiemmon2', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('nhapdiemmon3', 'Nhập điểm Môn 3: (*)', ['class' => 'col-md-4 col-sm-6 control-label']) !!}
	    <div class="col-md-5 col-sm-6">
	        {!! Form::text('nhapdiemmon3', null, ['class' => 'form-control', 'placeholder' => 'Nhập điểm Môn 3']) !!}
	        {!! $errors->first('nhapdiemmon3', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
</div><!--Bước 2: 1 - Xét tuyển từ kết quả học bạ THPT/THBT-->

<div style="border: 2px dashed #ccc; padding: 15px; margin-bottom: 20px;">
	<h4>Bước 3: Thông tin liên lạc</h4>
	<p style="color: red;">Đề nghị thí sinh cung cấp số điện thoại chính xác để cán bộ tuyển sinh liên hệ</p>
	<div class="form-group">
	    {!! Form::label('dienthoai', 'Điện thoại', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
	    <div class="col-md-4 col-sm-6">
	        {!! Form::text('dienthoai', null, ['class' => 'form-control', 'placeholder' => 'Điện thoại']) !!}
	        {!! $errors->first('dienthoai', '<span class="help-block">:message</span>') !!}
	    </div>
	    {!! Form::label('email', 'Email', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
	    <div class="col-md-4 col-sm-6">
	        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
	        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
	<div class="form-group">
	    {!! Form::label('tenvadiachi', 'Tên và địa chỉ', ['class' => 'col-md-2 col-sm-6 control-label']) !!}
	    <div class="col-md-10 col-sm-6">
	        {!! Form::text('tenvadiachi', null, ['class' => 'form-control', 'placeholder' => 'Tên & địa chỉ người nhận giấy báo trúng tuyển']) !!}
	        {!! $errors->first('tenvadiachi', '<span class="help-block">:message</span>') !!}
	    </div>
	</div>
</div>