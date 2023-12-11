<script setup>
import { router, useForm } from "@inertiajs/vue3";
import { Datepicker } from "flowbite-datepicker";

const form = useForm({
  serial_number: '',
  assets_class: '',
  assets_name: '',
  units: '',
  acquisition_date: '',
  acquisition_cost: '',
  deduct: '',
  net_cost: '',
  dep_percent: '',
  dep_month: '',
  opening_date: '',
  written_off_acc_date: '',
  written_off_expense: '',
  net_book_value: '',
  remark: '',
});

function submit() {
    router.post("/depreciations/create", form);
  };


  // mounted() {
  //   // Initialize the datepicker when the component is mounted
  //   const datepickerInput = this.$refs.datepickerInput || datepicker;
  //   const datepicker = new Datepicker(datepickerInput, {
  //     format: "YYYY/MM/DD", // Set your desired date format
  //     // Other options can be added here according to the Flowbite Datepicker documentation
  //   });
  // },
  // data() {
  //   return {
  //     serialNumber: '',
  //     assetClass: '',
  //     assetsName: '',
  //     units: '',
  //     acquisitionDate: '',
  //     acquisitionCost: '',
  //     deduct: '',
  //     netCost: '',
  //     depPercent: '',
  //     depMonth: '',
  //     openingDate: '',
  //     writtenOffAccDate: '',
  //     writtenOffExpense: '',
  //     netBookValue: '',
  //     remark: '',
  //   };
  // },

  // methods: {
  //   submitForm() {
  //     const formData = {
  //       serial_number: this.serialNumber,
  //       assets_class: this.assetClass,
  //       assets_name: this.assetsName,
  //       units: this.units,
  //       acquisition_date: this.acquisitionDate,
  //       acquisition_cost: this.acquisitionCost,
  //       deduct: this.deduct,
  //       net_cost: this.netCost,
  //       dep_percent: this.depPercent,
  //       dep_month: this.depMonth,
  //       opening_date: this.openingDate,
  //       written_off_acc_date: this.writtenOffAccDate,
  //       written_off_expense: this.writtenOffExpense,
  //       net_book_value: this.netBookValue,
  //       remark: this.remark,
  //     };
  //   }
  // }

</script>

<template>
  <Head title="Depreciation" />

  <div class="container mt-10 mx-auto md:px-0 max-w-screen-xl">
    <div
      class="w-full md:w-3/4 lg:w-2/3 xl:w-1/2 mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
    >
      <h5
        class="mb-2 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white"
      >
        Depreciation Form
      </h5>
      <form
        @submit.prevent="submit"
        class="mx-auto grid grid-cols-2 gap-5"
      >
        <div class="mb-5">
          <label
            for="serial_number"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Serial Number</label
          >
          <input
            type="serial_number"
            id="serial_number"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="PC-000000"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Asset Class</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Furniture"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Asset Name</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Table"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Units</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="1"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >
            Acquisition Date
          </label>

          <div class="relative max-w-sm">
            <div
              class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
            >
              <svg
                class="w-4 h-4 text-gray-500 dark:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                />
              </svg>
            </div>
            <input
              ref="datepickerInput"
              datepicker-autohide
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Select date"
            />
          </div>
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Acquisition Cost</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Furniture"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Deduct(discount)</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Furniture"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Net Cost</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Enter Net Cost"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Dep%</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Select Dep%"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Dep Month</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Select Dep Month"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Opening Date</label
          >
          <div class="relative max-w-sm">
            <div
              class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
            >
              <svg
                class="w-4 h-4 text-gray-500 dark:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                />
              </svg>
            </div>
            <input
              ref="datepickerInput"
              datepicker-autohide
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
             
            />
          </div>
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Opening Written Acc Off</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Enter written off Acc Dep"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Written Off Expenses</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Enter Written Off Expenses"
            required
          />
        </div>
        <div class="mb-5">
          <label
            for="assets_class"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Net Book Value</label
          >
          <input
            type="text"
            id="assets_class"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
            placeholder="Enter Net Book Value"
            required
          />
        </div>
        <div class="col-span-2 mb-5">
          <label
            for="message"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >Remark</label
          >
          <textarea
            id="message"
            rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Write your thoughts here..."
          ></textarea>
        </div>
          <button
            type="submit"
            class="col-span-2 mb-2 text-white bg-violet-600 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-auto"
          >
            Register
          </button>
      </form>
    </div>
  </div>
</template>
