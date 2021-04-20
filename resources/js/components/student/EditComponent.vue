<template>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
            Editar Aluno
            <span v-if="student.id">
                <span v-if="student.is_approved" class="badge bg-success">Aprovado</span>
                <span v-if="!student.is_approved" class="badge bg-danger">Peprovado</span>
                <a class="btn btn-outline-primary float-right" :href="backToUrl">Listar alunos</a>
            </span>
        </div>

        <div class="card-body">
          <student-form-component v-if="student.id" :student="student"></student-form-component>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["id"],

  data() {
    return {
      student: {
        id: null,
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
    this.getById();
    this.backToUrl = CONFIG.APP_URL.concat('/students');
  },

  methods: {
    getById() {
      axios
        .get(CONFIG.API_URL.concat("/students/edit/", this.id))
        .then((response) => {
          this.student = response.data;
        });
    },
  },
};
</script>
