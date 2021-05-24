<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Cloud\Dialogflow\V2beta1;

/**
 * Service for managing [Participants][google.cloud.dialogflow.v2beta1.Participant].
 */
class ParticipantsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Creates a new participant in a conversation.
     * @param \Google\Cloud\Dialogflow\V2beta1\CreateParticipantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateParticipant(\Google\Cloud\Dialogflow\V2beta1\CreateParticipantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/CreateParticipant',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\Participant', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a conversation participant.
     * @param \Google\Cloud\Dialogflow\V2beta1\GetParticipantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetParticipant(\Google\Cloud\Dialogflow\V2beta1\GetParticipantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/GetParticipant',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\Participant', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the list of all participants in the specified conversation.
     * @param \Google\Cloud\Dialogflow\V2beta1\ListParticipantsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListParticipants(\Google\Cloud\Dialogflow\V2beta1\ListParticipantsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/ListParticipants',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\ListParticipantsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the specified participant.
     * @param \Google\Cloud\Dialogflow\V2beta1\UpdateParticipantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateParticipant(\Google\Cloud\Dialogflow\V2beta1\UpdateParticipantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/UpdateParticipant',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\Participant', 'decode'],
        $metadata, $options);
    }

    /**
     * Adds a text (chat, for example), or audio (phone recording, for example)
     * message from a participant into the conversation.
     *
     * Note: Always use agent versions for production traffic
     * sent to virtual agents. See [Versions and
     * environments](https://cloud.google.com/dialogflow/es/docs/agents-versions).
     * @param \Google\Cloud\Dialogflow\V2beta1\AnalyzeContentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AnalyzeContent(\Google\Cloud\Dialogflow\V2beta1\AnalyzeContentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/AnalyzeContent',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\AnalyzeContentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets suggested articles for a participant based on specific historical
     * messages.
     *
     * Note that [ListSuggestions][google.cloud.dialogflow.v2beta1.Participants.ListSuggestions] will only list the auto-generated
     * suggestions, while [CompileSuggestion][google.cloud.dialogflow.v2beta1.Participants.CompileSuggestion] will try to compile suggestion
     * based on the provided conversation context in the real time.
     * @param \Google\Cloud\Dialogflow\V2beta1\SuggestArticlesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SuggestArticles(\Google\Cloud\Dialogflow\V2beta1\SuggestArticlesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/SuggestArticles',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\SuggestArticlesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets suggested faq answers for a participant based on specific historical
     * messages.
     * @param \Google\Cloud\Dialogflow\V2beta1\SuggestFaqAnswersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SuggestFaqAnswers(\Google\Cloud\Dialogflow\V2beta1\SuggestFaqAnswersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/SuggestFaqAnswers',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\SuggestFaqAnswersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets smart replies for a participant based on specific historical
     * messages.
     * @param \Google\Cloud\Dialogflow\V2beta1\SuggestSmartRepliesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SuggestSmartReplies(\Google\Cloud\Dialogflow\V2beta1\SuggestSmartRepliesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/SuggestSmartReplies',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\SuggestSmartRepliesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Use inline suggestion, event based suggestion or
     * Suggestion* API instead.
     * See [HumanAgentAssistantConfig.name][google.cloud.dialogflow.v2beta1.HumanAgentAssistantConfig.name] for more
     * details.
     * Removal Date: 2020-09-01.
     *
     * Retrieves suggestions for live agents.
     *
     * This method should be used by human agent client software to fetch auto
     * generated suggestions in real-time, while the conversation with an end user
     * is in progress. The functionality is implemented in terms of the
     * [list pagination](/apis/design/design_patterns#list_pagination)
     * design pattern. The client app should use the `next_page_token` field
     * to fetch the next batch of suggestions. `suggestions` are sorted by
     * `create_time` in descending order.
     * To fetch latest suggestion, just set `page_size` to 1.
     * To fetch new suggestions without duplication, send request with filter
     * `create_time_epoch_microseconds > [first item's create_time of previous
     * request]` and empty page_token.
     * @param \Google\Cloud\Dialogflow\V2beta1\ListSuggestionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSuggestions(\Google\Cloud\Dialogflow\V2beta1\ListSuggestionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/ListSuggestions',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\ListSuggestionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated. use [SuggestArticles][google.cloud.dialogflow.v2beta1.Participants.SuggestArticles] and [SuggestFaqAnswers][google.cloud.dialogflow.v2beta1.Participants.SuggestFaqAnswers] instead.
     *
     * Gets suggestions for a participant based on specific historical
     * messages.
     *
     * Note that [ListSuggestions][google.cloud.dialogflow.v2beta1.Participants.ListSuggestions] will only list the auto-generated
     * suggestions, while [CompileSuggestion][google.cloud.dialogflow.v2beta1.Participants.CompileSuggestion] will try to compile suggestion
     * based on the provided conversation context in the real time.
     * @param \Google\Cloud\Dialogflow\V2beta1\CompileSuggestionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CompileSuggestion(\Google\Cloud\Dialogflow\V2beta1\CompileSuggestionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.v2beta1.Participants/CompileSuggestion',
        $argument,
        ['\Google\Cloud\Dialogflow\V2beta1\CompileSuggestionResponse', 'decode'],
        $metadata, $options);
    }

}
