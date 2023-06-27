import axios from "axios";
import { defineStore } from "pinia";

export const useCoachingStore = defineStore("coaching", {
    state: () => ({
        coachings: null,
    }),
    actions: {
        async getCoachings() {
            try {
                let response = await axios.get("coachings");
                this.coachings = response.data.coachings;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addCoaching(form) {
            try {
                let response = await axios.post("coachings", form);
                this.coachings = response.data.coachings;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async updateCoaching(form) {
            try {
                let response = await axios.put("coachings/" + form.id, form);
                this.coachings = response.data.coachings;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async deleteCoaching() {
            try {
                let response = await axios.delete("coachings/" + id);
                this.coachings = response.data.coachings;
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
