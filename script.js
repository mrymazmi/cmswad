document.addEventListener("DOMContentLoaded", function () {
  const insertForm = document.getElementById("insert-form");
  const editForm = document.getElementById("edit-form");
  const deleteForm = document.getElementById("delete-form");
  const searchForm = document.getElementById("search-form");

  if (insertForm) {
    insertForm.addEventListener("submit", insertStudentMarks);
  }

  if (editForm) {
    editForm.addEventListener("submit", editStudentMarks);
  }

  if (deleteForm) {
    deleteForm.addEventListener("submit", deleteStudent);
  }

  if (searchForm) {
    searchForm.addEventListener("submit", searchStudent);
  }
});

// Implement the insertStudentMarks, editStudentMarks, deleteStudent, and searchStudent functions
// ...

