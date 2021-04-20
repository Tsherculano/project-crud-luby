<template>
  <form>
    <div class="form-group">
      <label for="name">Name</label>
      <input
        type="text"
        v-model="studentData.name"
        class="form-control"
        id="name"
        placeholder="Name"
      />
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="cpf">CPF</label>
          <input
            type="number"
            v-model="studentData.cpf"
            class="form-control"
            id="cpf"
            aria-describedby="cpfHelp"
            placeholder="CPF"
          />
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="fone">fone</label>
          <input
            type="Tel"
            v-model="studentData.fone"
            class="form-control"
            id="fone"
            aria-describedby="foneHelp"
            placeholder="fone"
          />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md">
        <div class="form-group">
          <label for="registration">Registration</label>
          <input
            type="number"
            v-model="studentData.registration"
            class="form-control"
            id="registration"
            aria-describedby="registrationHelp"
            placeholder="Registration"
          />
        </div>
      </div>

      <div class="col-md">
        <div class="form-group">
          <label for="grade">Grade</label>
          <input
            type="number"
            v-model="studentData.grade"
            class="form-control"
            id="grade"
            aria-describedby="gradeHelp"
            placeholder="Grade"
          />
        </div>
      </div>

      <div class="col-md">
        <div class="form-group">
          <label for="gender">Gender</label>

          <input
            type="text"
            v-model="studentData.gender"
            class="form-control"
            id="gender"
            aria-describedby="genderHelp"
            placeholder="Gender"
          />
        </div>
      </div>

      <div class="col-md">
        <div class="form-group">
          <label for="age">Age</label>
          <input
            type="number"
            v-model="studentData.age"
            class="form-control"
            id="age"
            aria-describedby="ageHelp"
            placeholder="Age"
          />
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <input
        type="text"
        v-model="studentData.address"
        class="form-control"
        id="address"
        aria-describedby="addressHelp"
        placeholder="Address"
      />
    </div>

    <button type="submit" @click.prevent="submit" class="btn btn-primary">
      {{ buttonText }}
    </button>
  </form>
</template>

<script>
export default {
  props: ["student"],

  data() {
    return {
      studentData: {},
      buttonText: "Adicionar",
    };
  },

  mounted() {
    this.studentData = this.student;

    if (this.studentData.id) {
      this.buttonText = "Editar";
    }
  },

  methods: {
    submit() {
      if (this.studentData.id) {
        this.update();
      } else {
        this.add();
      }
    },

    update() {
      axios
        .put(CONFIG.API_URL.concat("/students/update"), {
          id: this.studentData.id,
          name: this.studentData.name,
          registration: this.studentData.registration,
          grade: this.studentData.grade,
          gender: this.studentData.gender,
          age: this.studentData.age,
          cpf: this.studentData.cpf,
          fone: this.studentData.fone,
          address: this.studentData.address,
        })
        .then(() => {
          window.location.href = CONFIG.APP_URL.concat("/students");
        });
    },

    add() {
      axios
        .post(CONFIG.API_URL.concat("/students/add"), {
          name: this.studentData.name,
          registration: this.studentData.registration,
          grade: this.studentData.grade,
          gender: this.studentData.gender,
          age: this.studentData.age,
          cpf: this.studentData.cpf,
          fone: this.studentData.fone,
          address: this.studentData.address,
        })
        .then(() => {
          window.location.href = CONFIG.APP_URL.concat("/students");
        });
    },
  },
};
</script>
