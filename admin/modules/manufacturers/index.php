<?php
$SQL = "SELECT * FROM manufacturer ORDER BY id ASC";
$query_manu = mysqli_query($mysqli, $SQL);
?>
<div class="dashboard-products">
  <h2 class="text-dark11 text-2xl font-bold capitalize">
    Danh sách các nhà sản xuất
  </h2>
  <div class="flex items-center justify-between mt-5">
    <!-- SEARCH PRODUCTS -->
    <div class="dashboard-input-field flex items-center border-2 border-gray-300 p-2 w-[384px] rounded-lg bg-[#f9fafb] focus:border-red-700 focus-within:border-2 focus-within:border-[#3b82f6] transition-all">
      <input type="text" class="flex-1 text-sm font-medium outline-none bg-transparent" placeholder="Search for manufactures" />
    </div>
    <!-- ADD PRODUCTS -->
    <a href="index.php?action=quanlyhangsanxuat&process=add" class="flex items-center gap-1 bg-bluebtn text-white font-medium p-2 rounded-lg hover:bg-bluehover transition-all">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
      </svg>
      Add manufacture
    </a>
  </div>

  <!-- TABLE PRODUCTS -->
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
    <table class="w-full text-sm text-left text-gray-800 font-medium">
      <thead class="text-xs text-gray-800 uppercase">
        <tr class="border-b border-gray-400">
          <th class="px-6 py-3 bg-gray-50 w-[200px]">
            Tên nhà cung cấp
          </th>
          <th class="px-6 py-3 w-[150px]">Logo</th>
          <th class="px-6 py-3 w-[250px]">Địa chỉ</th>
          <th class="px-6 py-3 bg-gray-50">Số điện thoại</th>
          <th class="px-6 py-3">Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_array($query_manu)) {
        ?>
          <tr class="border-b border-gray-200">
            <td class="px-6 py-4 w-[200x]">
              <h4><?php echo $row['name'] ?></h4>
            </td>
            <td class="px-6 py-4 w-[150px]">
              <img src="modules/manufacturers/uploads/<?php echo $row['logo'] ?>" alt="Logo" class="w-full h-full object-cover">
            </td>
            <td class="px-6 py-4 w-[250px]">
              <?php echo $row['address'] ?>
            </td>
            <td class="px-6 py-4">
              <span><?php echo $row['phone_number'] ?></span>
            </td>
            <td class="px-6 py-4">
              <div class="flex items-center gap-2">
                <a href="?action=quanlyhangsanxuat&process=update&id=<?php echo $row['id'] ?>" class="flex items-center justify-center gap-1 bg-bluebtn p-2 rounded-lg text-white hover:bg-bluehover">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                  Sửa
                </a>
                <button class="flex items-center justify-center gap-1 bg-secondary p-2 rounded-lg text-white hover:bg-secondaryhover">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  Xoá
                </button>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- PAGINATION -->
  <div class="flex items-center justify-end gap-3 mt-10 mr-20">
    <a href="#" class="pagi-active inline-block text-black font-medium">1</a>
    <a href="#" class="inline-block text-black font-medium">2</a>
    <a href="#" class="inline-block text-black font-medium">3</a>
  </div>
</div>