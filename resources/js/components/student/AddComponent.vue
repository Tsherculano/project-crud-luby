<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">Novo Aluno <a class="btn btn-outline-primary float-right" :href="backToUrl">Listar alunos</a></div>

          <div class="card-body">
            <student-form-component :student="student"></student-form-component>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      student: {
        name: null,
        registration: null,
        grade: null,
        gender: null,
        age: null,
        cpf: null,
        fone: null,
        address: null,
      },
      backToUrl: null,
    };
  },

  mounted() {
      this.backToUrl = CONFIG.APP_URL.concat('/students');
  }
};
</script>
