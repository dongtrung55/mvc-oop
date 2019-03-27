<h1>Danh sách lương của giáo viên</h1>
<div class="button">
	<a href="them-can-bo-giao-vien.html" class="btn btn-success btn-md"> <i class="fa fa-plus"></i> Thêm mới</a>
</div>
<br/><br/>
<table id="listcbgv" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Họ và Tên</th>
			<th>Ngày Sinh</th>
			<th>Quê Quán</th>
			<th>Lương Cứng</th>
			<th>Thưởng</th>
			<th>Phạt</th>
			<th>Lương Thực Lĩnh</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($list as $cbgv) {
	?>
			<tr>
				<td><?php echo $cbgv->id; ?></td>
				<td><?php echo $cbgv->name; ?></td>
				<td><?php echo date("d-m-Y", strtotime($cbgv->birthDay)); ?></td>
				<td><?php echo $cbgv->address; ?></td>
				<td><?php echo number_format($cbgv->luongCung); ?> VNĐ</td>
				<td><?php echo number_format($cbgv->luongThuong); ?> VNĐ</td>
				<td><?php echo number_format($cbgv->luongPhat); ?> VNĐ</td>
				<td><?php echo number_format($cbgv->luongLinhThuc); ?> VNĐ</td>
				<td class="center">
					<div class="btn-group dropup">
						<button data-toggle="dropdown" class="btn btn-warning dropdown-toggle" type="button"><i class="fa fa-bars m-r-5"></i><span class="caret"></span></button>
						<ul role="menu" class="dropdown-menu">
							<li>
								<a onclick="return window.confirm('Bạn có muốn xóa không?');" href="xoa-cbgv-id-<?php echo $cbgv->id; ?>.html"><i class="fa fa-trash"></i> Xóa </a>
							</li>
							<li><a href="sua-thong-tin-can-bo-giao-vien-<?php echo $cbgv->id; ?>.html"><i class="fa fa-edit"></i> Sửa</a>
							</li>
						</ul>
					</div>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>
