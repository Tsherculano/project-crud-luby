<template>
  <div class="card">
    <div class="card-header">
      Alunos
      <a class="btn btn-outline-primary float-right" :href="addUrl"
        >Novo aluno</a
      >
    </div>

    <div class="card-body">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">CPF</th>
            <th scope="col">Fone</th>
            <th scope="col">Status</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr v-for="(student, index) in students.data" :key="student.id">
            <th scope="row">{{ index + 1 }}</th>
            <td>{{ student.name }}</td>
            <td>{{ student.cpf }}</td>
            <td>{{ student.fone }}</td>
            <td>
                <span v-if="student.is_approved" class="badge bg-success">Aprovado</span>
                <span v-if="!student.is_approved" class="badge bg-danger">Peprovado</span>
            </td>
            <td>
              <button
                type="button"
                @click="edit(student.id)"
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#exampleModal"
              >
                Editar
              </button>

              <button
                type="button"
                @click="deleteById(student.id)"
                class="btn btn-danger"
              >
                Deletar
              </button>
            </td>
          </tr>
        </tbody>
      </table>

      <pagination :data="students" @pagination-change-page="get"></pagination>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      students: {},
      addUrl: null,
    };
  },

  mounted() {
    this.get();
    this.addUrl = CONFIG.APP_URL.concat("/students/add");
  },

  methods: {
    get(page = 1) {
      axios
        .get(CONFIG.API_URL.concat("/students?page=", page))
        .then((response) => {
          this.students = response.data;
        });
    },

    edit(id) {
      window.location.href = CONFIG.APP_URL.concat("/students/edit/", id);
    },

    deleteById(id) {
      if (confirm("Deseja realmente excluir este aluno?")) {
        axios
          .delete(CONFIG.API_URL.concat("/students/delete/", id))
          .then((response) => {
            this.get();
          });
      }
    },
  },
};
</script>

