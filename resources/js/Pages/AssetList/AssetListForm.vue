<script>
export default {
  data() {
    return {
      items: Array.from({ length: 12 }, (_, index) => ({
        image: `https://www.pcworld.com/wp-content/uploads/2023/09/framework-laptop-13-hero-2.jpg?quality=50&strip=all`,
        attributes: {
          "Serial Number": `PC-00000${index + 1}`,
          "Asset Name": `Computer${index + 1}`,
          "Asset Class":
            "2K/1600 Hyundia Porter II(PICKUP 4X2 (L) Double Cab) 1460 Kg",
          "Brand Name": "Dell",
          Status: "Active",
          "Acc Status": "Using",
          QTY: "1",
          Location: "4th Floor",
          "Purchase Date": "2023/12/06",
          // Add more attributes as needed
        },
      })),
    };
  },
};
</script>

<template>
  <div class="mt-10 mx-auto md:px-0 max-w-7xl mb-24">
    <div class="ml-6 flex flex-1 gap-x-3 justify-center">
      <div class="cursor-pointer">
        <label
          for="search_keyword"
          class="block text-lg font-bold text-gray-700"
          >Search Keyword</label
        >
        <input
          type="text"
          class="mt-2 rounded-full border border-[#DDE2E4] text-md"
          placeholder="Search Here..."
        />
      </div>
      <!-- search location -->
      <div class="cursor-pointer">
        <label
          for="search_location"
          class="block text-lg font-bold text-gray-700"
          >Search Location</label
        >
        <select
          id="location"
          name="location"
          class="mt-2 block rounded-full border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-md"
          placeholder="Search Location..."
        >
          <option value="location1" disabled>Search...</option>
          <option value="location1">Location 1</option>
          <option value="location2">Location 2</option>
          <option value="location3">Location 3</option>
        </select>
      </div>
      <!-- From date -->
      <div>
        <label for="to_date" class="block text-lg font-bold text-gray-700"
          >From Date</label
        >
        <input
          datepicker
          datepicker-format="dd/mm/yy"
          id="card-expiration-input"
          type="date"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="06/12/23"
          required
        />
      </div>
      <!-- To Date -->
      <div>
        <label for="to_date" class="block text-lg font-bold text-gray-700"
          >To Date</label
        >
        <input
          datepicker
          datepicker-format="dd/mm/yy"
          id="card-expiration-input"
          type="date"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="06/12/23"
          required
        />
      </div>
      <!-- search icon -->
      <div class="cursor-pointer">
        <button
          type="submit"
          class="search-btn inline-flex items-center text-lg font-medium text-white"
        >
          <svg
            aria-hidden="true"
            class="svg-search"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
            ></path>
          </svg>
        </button>
      </div>
      <!-- download -->
      <div class="cursor-pointer">
        <button
          type="button"
          class="download-btn text-white font-medium rounded-full text-lg px-5 py-2.5 text-center"
        >
          Download
        </button>
      </div>
    </div>
  </div>
  <div
    class="mt-10 mx-auto md:px-0 grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-2 max-w-7xl"
  >
    <div v-for="(item, index) in items" :key="index">
      <!-- Loop through items -->
      <div class="card">
        <div
          class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
        >
          <div class="flex justify-center" style="margin-top: 50px">
            <img class="assets_img" :src="item.image" alt="product image" />
          </div>

          <div
            v-for="(value, key) in item.attributes"
            :key="key"
            class="grid grid-cols-12 px-2 gap-0 mb-3"
          >
            <div class="col-span-5 text-gray-700 px-2">{{ key }}</div>
            <div class="col-span-1">-</div>
            <div class="text-wrap col-span-6 text-gray-700">{{ value }}</div>
          </div>
          <div class="detail-btn">
            <div class="btn-container">
              <a class="btn-content" href="#">
                <span class="btn-title mt-0.5">DETAIL</span>
                <span class="icon-arrow">
                  <svg
                    class="svg-arrow"
                    viewBox="0 0 66 43"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                  >
                    <g
                      id="arrow"
                      stroke="none"
                      stroke-width="1"
                      fill="none"
                      fill-rule="evenodd"
                    >
                      <path
                        id="arrow-icon-one"
                        d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                        fill="#FFFFFF"
                      ></path>
                      <path
                        id="arrow-icon-two"
                        d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                        fill="#FFFFFF"
                      ></path>
                      <path
                        id="arrow-icon-three"
                        d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                        fill="#FFFFFF"
                      ></path>
                    </g>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style src="../../../css/asset_list.css" scoped>
</style>