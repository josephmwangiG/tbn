import axios from "axios";
import { defineStore } from "pinia";

export const useCoachStore = defineStore("coach", {
    state: () => ({
        coaches: null,
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
        async addCoach(form) {
            try {
                let response = await axios.post("coaches", form);
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async editCoachProfile(form) {
            try {
                let response = await axios.put("coaches/" + form.id, form);
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addCoachEducation(form) {
            try {
                let response = await axios.post(
                    "coaches/profile/add-education",
                    form
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
                    form
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
                    form
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
                    form
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
