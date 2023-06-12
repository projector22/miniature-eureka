<template>
  <h2 class="text-2xl font-semibold mb-2">New Idea</h2>

  <div class="mb-5">
        <label for="idea-title">Title</label>
        <br>
        <input type="text" class="w-3/5 rounded-md p-2 text-black ml-4 mr-2" name="idea-title" id="idea-title">
      </div>

      <div class="mb-5">
        <label for="idea-details">Details</label>
        <br>
        <textarea name="idea-details" class="w-3/5 rounded-md p-2 text-black ml-4 mr-2" id="idea-details" cols="30" rows="10"></textarea>
      </div>

      <div class="mb-5">
        <label for="idea-tags">Tags</label>
        <br>
        <input type="text" class="w-3/5 rounded-md p-2 text-black ml-4 mr-2" name="idea-tags" id="idea-tags">
      </div>
  
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">Save</button>
</template>
  
