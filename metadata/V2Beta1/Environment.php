<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/environment.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2Beta1;

class Environment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Fulfillment::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�#
1google/cloud/dialogflow/v2beta1/environment.protogoogle.cloud.dialogflow.v2beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto2google/cloud/dialogflow/v2beta1/audio_config.proto1google/cloud/dialogflow/v2beta1/fulfillment.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Environment
name (	B�A
description (	B�A
agent_version (	B�AF
state (22.google.cloud.dialogflow.v2beta1.Environment.StateB�A4
update_time (2.google.protobuf.TimestampB�A[
text_to_speech_settings (25.google.cloud.dialogflow.v2beta1.TextToSpeechSettingsB�AF
fulfillment (2,.google.cloud.dialogflow.v2beta1.FulfillmentB�A"E
State
STATE_UNSPECIFIED 
STOPPED
LOADING
RUNNING:��A�
%dialogflow.googleapis.com/Environment3projects/{project}/agent/environments/{environment}Hprojects/{project}/locations/{location}/agent/environments/{environment}"�
TextToSpeechSettings"
enable_text_to_speech (B�AX
output_audio_encoding (24.google.cloud.dialogflow.v2beta1.OutputAudioEncodingB�A
sample_rate_hertz (B�Az
synthesize_speech_configs (2R.google.cloud.dialogflow.v2beta1.TextToSpeechSettings.SynthesizeSpeechConfigsEntryB�Aw
SynthesizeSpeechConfigsEntry
key (	F
value (27.google.cloud.dialogflow.v2beta1.SynthesizeSpeechConfig:8"�
ListEnvironmentsRequest=
parent (	B-�A�A\'%dialogflow.googleapis.com/Environment
	page_size (B�A

page_token (	B�A"w
ListEnvironmentsResponseB
environments (2,.google.cloud.dialogflow.v2beta1.Environment
next_page_token (	"T
GetEnvironmentRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Environment"�
CreateEnvironmentRequest=
parent (	B-�A�A\'%dialogflow.googleapis.com/EnvironmentF
environment (2,.google.cloud.dialogflow.v2beta1.EnvironmentB�A
environment_id (	B�A"�
UpdateEnvironmentRequestF
environment (2,.google.cloud.dialogflow.v2beta1.EnvironmentB�A4
update_mask (2.google.protobuf.FieldMaskB�A4
\'allow_load_to_draft_and_discard_changes (B�A"W
DeleteEnvironmentRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Environment"�
GetEnvironmentHistoryRequest=
parent (	B-�A�A\'
%dialogflow.googleapis.com/Environment
	page_size (B�A

page_token (	B�A"�
EnvironmentHistory
parent (	B�AO
entries (29.google.cloud.dialogflow.v2beta1.EnvironmentHistory.EntryB�A
next_page_token (	B�Ad
Entry
agent_version (	
description (	/
create_time (2.google.protobuf.Timestamp2�
Environments�
ListEnvironments8.google.cloud.dialogflow.v2beta1.ListEnvironmentsRequest9.google.cloud.dialogflow.v2beta1.ListEnvironmentsResponse"���p//v2beta1/{parent=projects/*/agent}/environmentsZ=;/v2beta1/{parent=projects/*/locations/*/agent}/environments�Aparent�
GetEnvironment6.google.cloud.dialogflow.v2beta1.GetEnvironmentRequest,.google.cloud.dialogflow.v2beta1.Environment"v���p//v2beta1/{name=projects/*/agent/environments/*}Z=;/v2beta1/{name=projects/*/locations/*/agent/environments/*}�
CreateEnvironment9.google.cloud.dialogflow.v2beta1.CreateEnvironmentRequest,.google.cloud.dialogflow.v2beta1.Environment"�����"//v2beta1/{parent=projects/*/agent}/environments:environmentZJ";/v2beta1/{parent=projects/*/locations/*/agent}/environments:environment�
UpdateEnvironment9.google.cloud.dialogflow.v2beta1.UpdateEnvironmentRequest,.google.cloud.dialogflow.v2beta1.Environment"�����2;/v2beta1/{environment.name=projects/*/agent/environments/*}:environmentZV2G/v2beta1/{environment.name=projects/*/locations/*/agent/environments/*}:environment�
DeleteEnvironment9.google.cloud.dialogflow.v2beta1.DeleteEnvironmentRequest.google.protobuf.Empty"v���p*//v2beta1/{name=projects/*/agent/environments/*}Z=*;/v2beta1/{name=projects/*/locations/*/agent/environments/*}�
GetEnvironmentHistory=.google.cloud.dialogflow.v2beta1.GetEnvironmentHistoryRequest3.google.cloud.dialogflow.v2beta1.EnvironmentHistory"�����9/v2beta1/{parent=projects/*/agent/environments/*}/historyZGE/v2beta1/{parent=projects/*/locations/*/agent/environments/*}/historyx�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
#com.google.cloud.dialogflow.v2beta1BEnvironmentProtoPZIgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2beta1;dialogflow��DF�Google.Cloud.Dialogflow.V2beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

