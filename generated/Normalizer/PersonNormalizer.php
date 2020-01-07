<?php

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PersonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\Person';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\Person';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\Person();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'first_name') && $data->{'first_name'} !== null) {
            $object->setFirstName($data->{'first_name'});
        }
        if (property_exists($data, 'last_name') && $data->{'last_name'} !== null) {
            $object->setLastName($data->{'last_name'});
        }
        if (property_exists($data, 'email') && $data->{'email'} !== null) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'login') && $data->{'login'} !== null) {
            $object->setLogin($data->{'login'});
        }
        if (property_exists($data, 'admin') && $data->{'admin'} !== null) {
            $object->setAdmin($data->{'admin'});
        }
        if (property_exists($data, 'archived') && $data->{'archived'} !== null) {
            $object->setArchived($data->{'archived'});
        }
        if (property_exists($data, 'subscribed') && $data->{'subscribed'} !== null) {
            $object->setSubscribed($data->{'subscribed'});
        }
        if (property_exists($data, 'avatar_url') && $data->{'avatar_url'} !== null) {
            $object->setAvatarUrl($data->{'avatar_url'});
        }
        if (property_exists($data, 'roles') && $data->{'roles'} !== null) {
            $values = array();
            foreach ($data->{'roles'} as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt($data->{'updated_at'});
        }
        if (property_exists($data, 'updated_by_id') && $data->{'updated_by_id'} !== null) {
            $object->setUpdatedById($data->{'updated_by_id'});
        }
        if (property_exists($data, 'harvest_user_id') && $data->{'harvest_user_id'} !== null) {
            $object->setHarvestUserId($data->{'harvest_user_id'});
        }
        if (property_exists($data, 'weekly_capacity') && $data->{'weekly_capacity'} !== null) {
            $object->setWeeklyCapacity($data->{'weekly_capacity'});
        }
        if (property_exists($data, 'working_days') && $data->{'working_days'} !== null) {
            $object->setWorkingDays($this->denormalizer->denormalize($data->{'working_days'}, 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays', 'json', $context));
        }
        if (property_exists($data, 'color_blind') && $data->{'color_blind'} !== null) {
            $object->setColorBlind($data->{'color_blind'});
        }
        if (property_exists($data, 'personal_feed_token_id') && $data->{'personal_feed_token_id'} !== null) {
            $object->setPersonalFeedTokenId($data->{'personal_feed_token_id'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'last_name'} = $object->getLastName();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getLogin()) {
            $data->{'login'} = $object->getLogin();
        }
        if (null !== $object->getAdmin()) {
            $data->{'admin'} = $object->getAdmin();
        }
        if (null !== $object->getArchived()) {
            $data->{'archived'} = $object->getArchived();
        }
        if (null !== $object->getSubscribed()) {
            $data->{'subscribed'} = $object->getSubscribed();
        }
        if (null !== $object->getAvatarUrl()) {
            $data->{'avatar_url'} = $object->getAvatarUrl();
        }
        if (null !== $object->getRoles()) {
            $values = array();
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data->{'roles'} = $values;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt();
        }
        if (null !== $object->getUpdatedById()) {
            $data->{'updated_by_id'} = $object->getUpdatedById();
        }
        if (null !== $object->getHarvestUserId()) {
            $data->{'harvest_user_id'} = $object->getHarvestUserId();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data->{'weekly_capacity'} = $object->getWeeklyCapacity();
        }
        if (null !== $object->getWorkingDays()) {
            $data->{'working_days'} = $this->normalizer->normalize($object->getWorkingDays(), 'json', $context);
        }
        if (null !== $object->getColorBlind()) {
            $data->{'color_blind'} = $object->getColorBlind();
        }
        if (null !== $object->getPersonalFeedTokenId()) {
            $data->{'personal_feed_token_id'} = $object->getPersonalFeedTokenId();
        }
        return $data;
    }
}