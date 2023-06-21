import axios from "axios";
import { defineStore } from "pinia";

export const useTrainingEventStore = defineStore("trainingEvent", {
    state: () => ({
        trainingEvents: null,
        coaches: null,
    }),
    actions: {
        async getTrainingEvents() {
            try {
                let response = await axios.get("trainingEvents");
                this.trainingEvents = response.data.trainingEvents;
                this.coaches = response.data.coaches;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addTrainingEvent(form) {
            try {
                let response = await axios.post("trainingEvents", form);
                this.trainingEvents = response.data.trainingEvents;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async updateTrainingEvent(form) {
            try {
                let response = await axios.put(
                    "trainingEvents/" + form.id,
                    form
                );
                this.trainingEvents = response.data.trainingEvents;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async deleteTrainingEvent() {
            try {
                let response = await axios.delete("trainingEvents/" + id);
                this.trainingEvents = response.data.trainingEvents;
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
