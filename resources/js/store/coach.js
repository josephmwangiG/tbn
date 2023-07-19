import axios from "axios";
import { defineStore } from "pinia";

export const useCoachStore = defineStore("coach", {
    state: () => ({
        coaches: null,
        coach: null,
        headers: {
            headers: {
                Authorization: "Bearer " + localStorage.getItem("token"),
            },
        },
    }),
    actions: {
        async getCoaches() {
            try {
                let response = await axios.get("coaches");
                this.coaches = response.data.coaches;
                return true;
            } catch (e) {
                return e.response;
            }
        },

        async getCoachProfile(id) {
            try {
                let response = await axios.get(
                    "coaches/" + id + "/get/profile",
                    this.headers
                );
                this.coach = response.data.coach;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addCoach(form) {
            try {
                let response = await axios.post("coaches", form);
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async updateCoachProfile(form) {
            try {
                let response = await axios.put(
                    "coaches/" + form.id + "/update/profile",
                    form,
                    this.headers
                );
                this.coach = response.data.coach;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addCoachEducation(form) {
            try {
                let response = await axios.post(
                    "coaches/profile/add-education",
                    form,
                    this.headers
                );
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async updateCoachEducation(form) {
            try {
                let response = await axios.put(
                    "coaches/profile/edit-education/" + form.id,
                    form,
                    this.headers
                );
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addCoachExperience(form) {
            try {
                let response = await axios.post(
                    "coaches/profile/add-experience",
                    form,
                    this.headers
                );
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async updateCoachExperience(form) {
            try {
                let response = await axios.put(
                    "coaches/profile/edit-experience/" + form.id,
                    form,
                    this.headers
                );
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async approveAccount(id, option) {
            try {
                let response = await axios.put("coaches/" + id + "/" + option);
                this.coaches = response.data.coaches;
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
