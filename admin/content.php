<div class="col-md-9 content">
	<section>
	<?php

	// Phân trang content
	// Lấy tham số tab
	if (isset($_GET['tab']))
	{
		$tab = trim(addslashes(htmlspecialchars($_GET['tab'])));
	}
	else
	{
		$tab = '';
	}

	// Nếu có tham số tab
	if ($tab != '')
	{
		// Hiển thị template chức năng theo tham số tab
		if ($tab == 'profile')
		{
			// Hiển thị template hồ sơ cá nhân
			require_once 'profile.php';
		}
		else if ($tab == 'posts')
		{
			// Hiển thị template bài viết
			require_once 'posts.php';
		}
		else if ($tab == 'photos')
		{
			// Hiển thị template hình ảnh
			require_once 'photos.php';
		}
		else if ($tab == 'categories')
		{
			// Hiển thị template chuyên mục
			require_once 'categories.php';
		}
		else if ($tab == 'setting')
		{
			// Hiển thị template cài đặt chung
			require_once 'setting.php';
		}
		else if ($tab == 'accounts')
		{
			// Hiển thị template tài khoản
			require_once 'accounts.php';
		}
	}
	// Ngược lại không có tham số tab
	else
	{
		// Hiển thị template bảng điều khiển
		require_once 'dashboard.php';
	}

	?>
	</section>
</div><!-- div.content -->